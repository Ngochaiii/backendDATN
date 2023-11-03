<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Checkouts;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $compacts = [
            'siteTitle' => "Checkout",
            'ship_method' => Orders::SHIP_METHODS,
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
            Product::where('product_id', $check->id)->update(['quantity' => $pro_quantity - $check->qty]);
        }
        Cart::destroy();
        return redirect()->route('order_tracking')->with('success', 'Thành công');
    }
}
