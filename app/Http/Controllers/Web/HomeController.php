<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::paginate(10);
        $compacts = [
            'siteTitle' => "Home Page " ,
            'product' => $product,
            'brands' =>Branch::all(),
        ];

        return view('web.default',$compacts);
    }
}
