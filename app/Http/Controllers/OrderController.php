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


}
