<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\UserVoucher;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers_fix = Voucher::where('type', 'fixed')->paginate(4);
        $vouchers_percentage = Voucher::where('type', 'percentage')->paginate(4);
        $compacts = [
            'siteTitle' => "Mã giảm giá",
            'vouchers_fix' => $vouchers_fix,
            'vouchers_percentage' => $vouchers_percentage,
        ];
        return view('web.front_end.voucher.index', $compacts);
    }
    public function redeemVoucher(Request $request)
    {
        $voucherIds = $request->input('voucher_ids', []);

        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            // Các quy tắc xác thực dữ liệu ở đây
        ]);

        // Lấy danh sách các voucher dựa trên danh sách ID
        $vouchers = Voucher::whereIn('id', $voucherIds)->get();

        // Lấy danh sách user voucher đã nhận từ người dùng
        $userVouchers = UserVoucher::where('user_id', auth()->id())->pluck('voucher_id')->toArray();

        foreach ($vouchers as $voucher) {
            // Kiểm tra xem người dùng đã nhận voucher loại này chưa
            if (in_array($voucher->id, $userVouchers)) {
                return response()->json(['error' => 'Bạn đã nhận loại voucher này rồi'], 422);
            }

            // Kiểm tra số lần sử dụng còn lại của voucher
            if ($voucher->uses < $voucher->max_uses) {
                // Sử dụng Eloquent Relationships để lưu dữ liệu
                $userVoucher = new UserVoucher([
                    'user_id' => auth()->id(),
                    'voucher_id' => $voucher->id,
                    // Các trường khác nếu cần
                ]);

                $userVoucher->save();

                // Tăng số lần sử dụng của voucher
                $voucher->increment('uses');

                // Cập nhật user_voucher_id trong bảng vouchers
                $voucher->update(['user_voucher_id' => $userVoucher->id]);
            } else {
                // Nếu hết lượt sử dụng, trả về thông báo lỗi
                return response()->json(['error' => 'Hết lượt sử dụng cho một số voucher'], 422);
            }
        }

        return response()->json(['message' => 'Nhận và sử dụng các voucher thành công']);
    }
}
