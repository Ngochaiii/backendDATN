<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return view('web.front_end.product.index');
    }

    public function edit() {
        return view('web.front_end.product.detail');
    }
}
