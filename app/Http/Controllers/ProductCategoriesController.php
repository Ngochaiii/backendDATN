<?php

namespace App\Http\Controllers;

use App\Models\Product_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compacts = [
            'dataCategories' => DB::table('product_categories')->paginate(15)
        ];
        return view('web.category.index',$compacts);
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
        // dd($request->all());
        $cate = new Product_categories();
        $cate ->name = $request->name;
        $cate->description = $request->description ;
        $cate->save();

        return redirect()->route('category')->with('success', 'Thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_categories  $product_categories
     * @return \Illuminate\Http\Response
     */
    public function show(Product_categories $product_categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_categories  $product_categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_categories $product_categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_categories  $product_categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_categories $product_categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_categories  $product_categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_categories $product_categories , int $id)
    {
        DB::table('product_categories')->where('cate_id', $id)->delete();
        return redirect()->route('category')->with('success', 'Thành công');
    }
}
