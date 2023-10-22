<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\Product_categories;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public static function getFilters(array $request = [])
    {
        $accepts = [
            'name', 'brand_id', 'cate_id', 'quantity', 'price', 'description'
        ];
        $filters = [];

        foreach ($accepts as $col) {
            $filters[$col] = Arr::get($request, $col);
        } //end foreach

        return $filters;
    }
    private static function getProduct(array $filters = [], $limit = 10)
    {
        extract($filters);
        $data = Product::query();
        if (!is_null($name)) {
            $data->where('name', 'LIKE',  "%" . $name . "%");
        } //end if
        if (!is_null($description)) {
            $data->where('description', 'LIKE',  "%" . $description . "%");
        } //end if
        if (!is_null($brand_id)) {
            $data->where('brand_id', $brand_id);
        } //end if
        if (!is_null($cate_id)) {
            $data->where('cate_id', $cate_id);
        } //end if
        if (!is_null($quantity)) {
            $data->where('quantity', '>=', $quantity);
        } //end if
        if (!is_null($price)) {
            $data->where('price', '>=', $price);
        } //end if
        // $searchs = [$name,$description,$brand_id,$cate_id,$quantity,$price];
        // foreach ($searchs as $key => $search) {
        //     if (!is_null($search)) {

        //         $data->where('name', 'LIKE',  "%" . $name . "%")
        //             ->orWhere('description', 'LIKE',  "%" . $description . "%")
        //             ->where('brand_id', $brand_id)
        //             ->orWhere('cate_id', $cate_id)
        //             ->where('quantity', '>=', $quantity)
        //             ->orWhere('price', '>=', $price)->get();
        //     }
        // }

        return $data->paginate($limit);
    }
    private static function findProduct(int $id)
    {
        return Product::find($id);
    }
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
        // dd($request->all());
        $this->validate($request, [

            'images' => 'required',

            'images.*' => 'mimes:png,jpg'

        ]);
        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('posts/image', $name);
                $images[] = $name;
            }
        }
        // dd($images);
        $products = new Product();
        $products->brand_id = $request->brand_id;

        $products->cate_id = $request->cate_id;
        $products->name = $request->name;
        $products->slug = Str::slug($request->name, '-');
        $products->pro_image = json_encode($images);
        $products->description = $request->description;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->status = $request->status;
        $products->featured = $request->featured;
        $products->save();

        return redirect()->route('product.list')->with('success', 'Thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $filters = self::getFilters($request->toArray());
        // dd($filters , self::getProduct($filters));
        $brands = Branch::all();
        $categories = Product_categories::all();
        $compacts = [
            "products" => self::getProduct($filters),
            "filters" => $filters,
            "brands" => $brands,
            "categories" => $categories
        ];

        return view('web.product.list', $compacts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, int $id)
    {
        $product = self::findProduct($id);
        if (!$product) {
            abort(404);
        } //end if
        $brands = Branch::all();
        $categories = Product_categories::all();
        $compacts = [
            "brands" => $brands,
            "categories" => $categories,
            'products' => $product
        ];
        return view('web.product.detail', $compacts);
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
    public function destroy(Product $product, int $id)
    {
        DB::table('products')->where('product_id', $id)->delete();
        return redirect()->route('product.list')->with('success', 'Thành công');
    }
}
