<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Checkouts;
use Auth;
use DB;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{

    public function index()
    {
        $id_user = Auth::user()->id;
        $data_order_id = DB::table('checkouts')
            ->join('orders', 'checkouts.order_id', '=', 'orders.order_id')
            ->where('user_id', $id_user)->get();

        $last_order = $data_order_id->last();

        $dataChekout = Checkouts::where('order_id', $last_order->order_id)->get();
        // dd($data_order_id,$dataChekout);
        $compacts = [
            'siteTitle' => "Order Tracking",
            'dataChekout' => $dataChekout,
            'last_order' => $last_order,
        ];
        return view('web.front_end.order_checking.index', $compacts);
    }
}
