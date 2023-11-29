<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Checkouts;
use App\Models\Product;
use App\Models\User;
use App\Models\UserVoucher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $id_user = auth()->id();
        $user_vouchers = UserVoucher::where('user_id', $id_user)->get();
        $usersWithVouchers = collect(); // Initialize with an empty collection

        if ($user_vouchers->isNotEmpty()) {
            $usersWithVouchers = User::with('vouchers')->get();
        }

        $compacts = [
            'siteTitle' => "Checkout",
            'ship_method' => Orders::SHIP_METHODS,
            'user_vouchers' => $user_vouchers,
            'usersWithVouchers' => $usersWithVouchers,
        ];

        return view('web.front_end.checkout.index', $compacts);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // insert order
        $price = Cart::content();
        $total = 0;
        $total_prices = 0;
        foreach ($price as $key => $value) {
            $total +=  $value->qty;
            $total_prices += $value->price * $value->qty;
        }
        $order = new Orders;
        $order->user_id = Auth::user()->id;
        $order->name = $request->name;
        $order->order_number = $request->_token;
        $order->phone = $request->phone;
        $order->city = $request->city;
        $order->district = $request->district;
        if (!is_null($request->specific_address_2)) {
            $order->specific_address = $request->specific_address_2;
        }
        $order->specific_address = $request->specific_address;
        $order->total = $request->quantity;
        $order->ship_method = $request->ship_method;
        $order->quantity = $total;
        if (!is_null($request->bill_image)) {
            $order->pay_method = 2;
            $file = $request->file('bill_image');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->move('file/bill_image', $fileName);
            $order->bill_image =  $fileName;
        }else{
            $order->pay_method = $request->pay_method;
        }
        $order->save();

        $order_id = $order->order_id;

        //insert checkout
        foreach (Cart::content() as $check) {
            DB::table('checkouts')->insert([
                'order_id' => $order_id,
                'product_id' => $check->id,
                'quantity' => $total,
                'total_price' => $total_prices,
            ]);
            $pro_quantity = Product::find($check->id)->quantity;
            // dd($pro_quantity - $check->qty);
            $product = Product::find($check->id);
            $product->quantity = $pro_quantity - $check->qty;
            $product->save();
        }
        Cart::destroy();
        return redirect()->route('order_tracking')->with('success', 'Thành công');
    }
}
