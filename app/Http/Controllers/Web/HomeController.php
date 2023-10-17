<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $compacts = [
            'siteTitle' => "Home Page " ,
            'brands' =>Branch::all(),
        ];

        return view('web.default',$compacts);
    }
}
