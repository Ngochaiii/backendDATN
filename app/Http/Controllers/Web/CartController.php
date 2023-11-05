<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        // dd($request->all());
        $pro_id = $request->product_id;
        $quantity = $request->quantity;
        $getpro = Product::find($pro_id);
        $pro_name = $getpro->name;
        $pro_image = $getpro->pro_image;
        if (isset($getpro->sale_price)) {
            $pro_price = $getpro->sale_price;
        }
        else{
            $pro_price = $getpro->price;
        }


        $data = [
            'id' => $pro_id,
            'qty' => $quantity,
            'name' => $pro_name,
            'price' => $pro_price,
            'weight' => '12',
            'options' => [
                'image' => $pro_image,
            ],
        ];
        Cart::add($data);

        return redirect()->back();
    }

    public function show_cart()
    {
        return view('web.front_end.cart.index');
    }

    public function delete_cart($rowId)
    {
        Cart::remove($rowId);

        return redirect()->back();
    }

    public function update_quantity(Request $request, $rowId)
    {
        // dd($request->all());
        Cart::update($rowId, $request->qty);

        return redirect()->back();
    }
    public function buy_now(Request $request)
    {
        // dd($request->all());
        $pro_id = $request->product_id;
        $quantity = $request->quantity;
        $getpro = Product::find($pro_id);
        $pro_name = $getpro->name;
        $pro_image = $getpro->pro_image;
        if (isset($getpro->sale_price)) {
            $pro_price = $getpro->sale_price;
        }
        else{
            $pro_price = $getpro->price;
        }


        $data = [
            'id' => $pro_id,
            'qty' => $quantity,
            'name' => $pro_name,
            'price' => $pro_price,
            'weight' => '12',
            'options' => [
                'image' => $pro_image,
            ],
        ];
        Cart::add($data);

        return redirect()->route('checkout');
    }
}
