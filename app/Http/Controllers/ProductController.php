<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\Product_categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Branch::all();
        $categories = Product_categories::all();
        $compacts = [
            'brands' => $brands,
            'categories' => $categories
        ];
        return view('web.product.index', $compacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $this->validate($request, [

            'pro_image' => 'required',

            'pro_image.*' => 'mimes:doc,pdf,docx,zip'

        ]);


        $products = new Product();
        $products->brand_id = $request->brand_id;
        dd(1);
        $products->cate_id = $request->cate_id;
        $products->name = $request->name;
        $products->slug = Str::slug($request->name, '-');
        if ($request->hasfile('pro_image')) {
            foreach ($request->file('pro_image') as $file) {
                $name = time() . '.' . $file->extension();

                $file->move(public_path() . '/files/', $name);

                $data[] = $name;
            }
        }
        $products->pro_image = json_encode($data);
        $products->description = $request->description;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->status = $request->status;
        $products->featured = $request->featured;
        $products->save();

        return redirect()->route('product')->with('success', 'Thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
