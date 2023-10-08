<?php

namespace App\Http\Controllers;

use App\Models\Checkouts;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
class OrderController extends Controller
{
    protected $notification;
    public function index()
    {
        $orders = Orders::with('checkouts')->latest()->get();
        $users = User::select('id', "name")->get();
        $compacts =[
            'orders' => $orders,
            'ship_methods' => Orders::SHIP_METHODS,
            'pay_methods' => Orders::PAY_METHODS,
            'users' => $users
        ];

        return view('web.order.index',$compacts );
    }
    public function show(int $id)
    {
        $order = Orders::findOrFail($id);
        // dd($order->checkouts);
        $users = User::select('id', "name")->get();
        $compacts =[
            'order' => $order,
            'ship_methods' => Orders::SHIP_METHODS,
            'pay_methods' => Orders::PAY_METHODS,
            'users' => $users
        ];

        return view('web.order.detail',$compacts);
    }
    public function store(Request $request)
    {
        // insert order
        if($request->hasFile('bill_image')){
            $file = $request->file('bill_image');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->move('images/cart', $fileName);
            $order = new Orders;
            $order ->user_id = Auth::user()->user_id;
            $order ->order_name = $request->input('order_name');
            $order ->order_phone = $request->input('order_phone');
            $order ->order_city = $request->input('order_city');
            $order ->order_district = $request->input('order_district');
            $order ->order_ward = $request->input('order_ward');
            $order ->order_address = $request->input('order_address');
            $order ->ship_method = $request->input('ship_method');
            $order ->pay_method = $request->input('pay_method');
            $order->order_total = Cart::subTotal();
            $order->order_qty = Cart::count();
            $order->bill_image = $fileName;
            $order->save();
        } else {
            $order = new Orders;
            $order ->user_id = Auth::user()->user_id;
            $order ->order_name = $request->input('order_name');
            $order ->order_phone = $request->input('order_phone');
            $order ->order_city = $request->input('order_city');
            $order ->order_district = $request->input('order_district');
            $order ->order_ward = $request->input('order_ward');
            $order ->order_address = $request->input('order_address');
            $order ->ship_method = $request->input('ship_method');
            $order ->pay_method = $request->input('pay_method');
            $order->order_total = (string)Cart::subTotal();
            $order->order_qty = Cart::count();
            $order->save();
        }
        $order_id = $order->order_id;

        //insert checkout
        foreach(Cart::content() as $check){
            Checkouts::create([
                'order_id' => $order_id,
                'pro_id' => $check->id,
                'quantity' => $check->qty,
                'total_price' => $check->price * $check->qty,
            ]);
            $pro_quantity = Product::find($check->id)->quantity;
            Product::where('pro_id', $check->id)->update(['quantity' => $pro_quantity - $check->qty]);
        }
        Cart::destroy();
        $data = [
            'title' => trans('admin.notification.title') . ' #' . $order->order_id,
            'content' => trans('admin.notification.content'),
        ];
        $this->notification->sendToAdmin($data);

        return view('cart.complete_order');

    }

}
