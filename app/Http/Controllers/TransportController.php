<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Transposts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TransportController extends Controller
{
    public static function getFilters(array $request = [])
    {
        $accepts = [
            'status', 'product_id', 'order_id',
        ];
        $filters = [];

        foreach ($accepts as $col) {
            $filters[$col] = Arr::get($request, $col);
        } //end foreach

        return $filters;
    }
    private static function getDataTranspost(array $filters = [], $limit = 10)
    {
        extract($filters);
        $data = Transposts::query();
        if (!is_null($status)) {
            $data->where('status',   $status);
        } //end if

        return $data->orderBy('id', 'desc')->paginate($limit);
    }
    private static function findTranspost(int $id)
    {
        return Transposts::find($id);
    }
    public static function index(Request $request)
    {
        // dd($request->all());
        $order_id = $request->order_id;
        if ($request->status == 1) {
            $order = Orders::find($order_id);
            $order->status = "processing";
            $order->save();
        }
        if ($request->status == 0) {
            $order = Orders::find($order_id);
            $order->status = "decline";
            $order->save();
        }
        if ($request->status == 4) {
            $order = Orders::find($order_id);
            $order->status = "completed";
            $order->save();
        }

        $transposts = new Transposts();
        $transposts->status = $request->status;
        $transposts->order_id = $order_id;
        $transposts->product_id = $request->product_id;
        $transposts->type = $request->type;
        $transposts->save();

        // DB::table('orders')->where('order_id', $order_id)->delete();
        // DB::table('checkouts')->where('order_id', $order_id)->delete();

        return redirect()->route('transposts')->with('success', 'Thành công');
    }
    public static function show(Request $request)
    {
        $filters = self::getFilters($request->toArray());
        $compacts = [
            "transposts" => self::getDataTranspost($filters),
            "filters" => $filters,
            'ship_methods' => Orders::SHIP_METHODS,
            'pay_methods' => Orders::PAY_METHODS,
            'actions' => Transposts::ACTIONS,
            'types' => Transposts::TYPES,
        ];

        return view('web.transposts.index', $compacts);
    }
    public function destroy(int $id)
    {
        DB::table('transposts')->where('id', $id)->delete();
        return redirect()->route('transposts')->with('success', 'Thành công');
    }
    public function call(Request $request)
    {
       $id = $request->route('id');
        $compacts =[
            'id_transport' => $id,
        ];
        return view('web.transposts.call_transporter',$compacts);
    }
    public function access(int $id)
    {
        // $id = $request->route('id');
        // dd($id);
        $transport = Transposts::find($id);
        $transport->type = 2;
        $transport->save();
        return redirect()->route('transposts')->with('success', 'Thành công');
    }
    public function completed(int $id)
    {
        $order = Orders::where('order_id', $id)->first();
        $order->status = "completed";
        $order->save();
        $transport = Transposts::where('order_id',$id)->first();
        // dd($transport,$id);
        $transport->type = 4;
        $transport->save();
        return redirect()->route('transposts')->with('success', 'Thành công');
    }
}
