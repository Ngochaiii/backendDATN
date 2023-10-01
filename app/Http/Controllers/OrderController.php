<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Orders::with('checkouts')->latest()->get();

        return view('web.order.index', compact('orders'));
    }
}
