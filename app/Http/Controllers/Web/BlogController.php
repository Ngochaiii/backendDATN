<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $compacts = [
            'siteTitle' => "blog"
        ];
        return view('web.front_end.blog.index',$compacts);
    }
}
