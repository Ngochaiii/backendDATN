<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::all();
        $compact = [
            'siteTitle' => "Quản lý voucher",
            'vouchers' => $vouchers,

        ];
        return view('web.vouchers.index',$compact);
    }

    public function create()
    {
        $compact = [
            'siteTitle' => "tạo Voucher mới"
        ];
        return view('web.vouchers.create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'code' => 'required|unique:vouchers',
            'type' => 'required',
            'value' => 'required|numeric',
            'expiration_date' => 'required|date',
        ]);

        // Tạo mới voucher
        Voucher::create($request->all());

        return redirect()->route('vouchers.index')->with('success', 'Voucher đã được thêm mới thành công.');
    }

    public function edit($id)
    {
        $voucher = Voucher::findOrFail($id);
        return view('vouchers.edit', compact('voucher'));
    }

    public function update(Request $request, $id)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'code' => 'required|unique:vouchers,code,' . $id,
            'type' => 'required',
            'value' => 'required|numeric',
            'expiration_date' => 'required|date',
        ]);

        // Cập nhật thông tin voucher
        $voucher = Voucher::findOrFail($id);
        $voucher->update($request->all());

        return redirect()->route('vouchers.index')->with('success', 'Voucher đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        // Xóa voucher
        $voucher = Voucher::findOrFail($id);
        $voucher->delete();

        return redirect()->route('vouchers.index')->with('success', 'Voucher đã được xóa thành công.');
    }
}
