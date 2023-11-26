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
        return view('web.vouchers.index', $compact);
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
        // dd($request->all());
        // Validate dữ liệu đầu vào
        $request->validate([
            'code' => 'required|unique:vouchers',
            'type' => 'required|in:percentage,fixed', // Loại chỉ có thể là 'percentage' hoặc 'fixed'
            'value' => 'required|numeric',
            'expiration_date' => 'required|date',
        ]);
        $active = false;
        if ($request->input('active') == "on") {

            $active = true;
        }
        // Tạo mới voucher
        $voucher = new Voucher([
            'code' => $request->input('code'),
            'type' => $request->input('type'),
            'value' => $request->input('value'),
            'expiration_date' => $request->input('expiration_date'),
            'min_order_value' => $request->input('min_order_value'),
            'max_uses' => $request->input('max_uses'),
            'active' => $active,
        ]);

        $voucher->save();

        return redirect()->route('admin.vouchers')->with('success', 'Voucher đã được thêm mới thành công.');
    }

    public function edit($id)
    {
        $voucher = Voucher::findOrFail($id);
        return view('web.vouchers.edit', compact('voucher'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        // Validate dữ liệu đầu vào
        $request->validate([
            'code' => 'required|unique:vouchers,code,' . $id,
            'type' => 'required',
            'value' => 'required|numeric',
            'expiration_date' => 'required|date',
        ]);
        $active = false;
        if ($request->input('active') == "on") {

            $active = true;
        }
        // Cập nhật thông tin voucher
        $voucher = Voucher::findOrFail($id);
        $voucher->update([
            'code' => $request->input('code'),
            'type' => $request->input('type'),
            'value' => $request->input('value'),
            'expiration_date' => $request->input('expiration_date'),
            'min_order_value' => $request->input('min_order_value'),
            'max_uses' => $request->input('max_uses'),
            'active' => $active,
        ]);

        return redirect()->route('admin.vouchers')->with('success', 'Voucher đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        // Xóa voucher
        $voucher = Voucher::findOrFail($id);
        $voucher->delete();

        return redirect()->route('admin.vouchers')->with('success', 'Voucher đã được xóa thành công.');
    }
}
