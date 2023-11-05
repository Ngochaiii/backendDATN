<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $compacts = [
            'siteTitle' => "blog"
        ];
        return view('web.front_end.blog.index', $compacts);
    }
    public function detail(Request $request, int $id)
    {
        $data = Post::where('id',$id)->first();
        // dd($data);
        $compacts = [
            'siteTitle' => "single blogs",
            'blog' =>$data
        ];
        return view('web.front_end.blog.detail', $compacts);
    }
}
