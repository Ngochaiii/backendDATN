<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public static function getFilters(array $request = [])
    {
        $accepts = [
            'name', 'price', 'quantity',
        ];
        $filters = [];
        foreach ($accepts as $col) {
            $filters[$col] = Arr::get($request, $col);
        } //end foreach

        return $filters;
    }
    private static function getProducts(array $filters = [], $limit = 8)
    {
        extract($filters);
        $data = Product::query();
        if (!is_null($name)) {
            $data->where('name', 'LIKE',  "%" . $name . "%");
        } //end if
        if (!is_null($quantity)) {
            $data->where('quantity', '>=',  $quantity);
        } //end if
        if (!is_null($price)) {
            $data->where('price', '>=', $price);
        } //end if

        return $data->orderBy('product_id', 'desc')->paginate($limit);
    }
    private static function findProduct(int $id)
    {
        return Product::find($id);
    }
    public function index(Request $request)
    {

        $filters = self::getFilters($request->toArray());

        $compacts = [

            'siteTitle' => 'Shop',
            "products" => self::getProducts($filters),
            "filters" => $filters,
        ];
        return view('web.front_end.product.index', $compacts);
    }
    public function sortByLatest(Request $request)
    {
    }
    public function edit(int $id)
    {

        return view('web.front_end.product.detail');
    }
    public function show($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }
}
