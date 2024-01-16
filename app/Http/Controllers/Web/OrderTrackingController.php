<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Checkouts;
use App\Models\Orders;
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
        $data_order = Orders::where('user_id',$id_user)->get();
        $dataChekouts = [];
        foreach ($data_order as $key => $item) {
            $data = Checkouts::where('order_id', $item->order_id)->get();
            $dataChekouts[] = $data;
        }
        $compacts = [
            'siteTitle' => "Order Tracking",
            'data_order'=> $data_order,
            'dataChekouts' => $dataChekouts,
        ];
        return view('web.front_end.order_checking.index', $compacts);
    }
}
