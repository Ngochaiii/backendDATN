<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index(){
        $compacts = [
            'siteTitle' => "Mã giảm giá"
        ];
        return view('web.front_end.voucher.index',$compacts);
    }
}
