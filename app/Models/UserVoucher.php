<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVoucher extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'voucher_id'];
    // Thêm các trường khác nếu cần
    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }
}
