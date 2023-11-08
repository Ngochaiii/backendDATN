<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transposts extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'status',
        'type',
        'product_id'
    ];

    const ACTION_APPROVED = 1;
    const ACTION_CANCELLED = 0;
    const ACTION_WARNING = 2;
    const ACTIONS = [
        self::ACTION_APPROVED => 'Đơn hàng đã duyệt ',
        self::ACTION_CANCELLED => 'Hủy đơn hàng',
        self::ACTION_WARNING => 'Đơn hàng cần kiểm duyệt'
    ];

    const ACTIONS_ARR = [
        self::ACTION_APPROVED,
        self::ACTION_CANCELLED,
        self::ACTION_WARNING
    ];
    public function getActionNameAttribute()
    {
        return self::ACTIONS[$this->status];
    }
    const TYPE_COMPLETED = 4;
    const TYPE_WAIT = 1;
    const TYPE_DELIVERING = 2;
    const TYPE_CANCELLED = 3;
    const TYPES_ARR = [
        self::TYPE_WAIT,
        self::TYPE_DELIVERING,
        self::TYPE_CANCELLED,
        self::TYPE_COMPLETED
    ];

    const TYPES = [
        self::TYPE_WAIT => 'Chờ xác nhận',
        self::TYPE_DELIVERING => 'Đang giao',
        self::TYPE_CANCELLED => 'Hủy giao',
        self::TYPE_COMPLETED => 'giao hàng thành công',
    ];
    public function getTypeNameAttribute()
    {
        return self::TYPES[$this->type];
    }

    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
