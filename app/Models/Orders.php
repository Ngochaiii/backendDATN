<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $primaryKey = 'order_id';
    use HasFactory;
    protected $fillable = [
        'order_number', 'user_id', 'status', 'total', 'ship_method', 'payment_status', 'pay_method',
        'name', 'phone', 'city', 'district', 'post_code', 'quantity', 'specific_address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function checkouts()
    {
        return $this->hasMany(Checkouts::class, 'order_id');
    }
    public function transposts()
    {
        return $this->hasMany(Transposts::class, 'order_id');
    }

    const SHIP_1 = 1;
    const SHIP_2 = 2;
    const SHIP_METHODS = [
        self::SHIP_1 => 'Giao hàng tiêu chuẩn ',
        self::SHIP_2 => 'Giao nhanh'
    ];

    const SHIP_METHODS_ARR = [
        self::SHIP_1,
        self::SHIP_2
    ];
    public function getShipMethodNameAttribute()
    {
        return self::SHIP_METHODS[$this->ship_method];
    }

    const PAY_1 = 1;
    const PAY_2 = 2;

    const PAY_METHODS = [
        self::PAY_1 => 'Thanh toán khi nhận hàng ',
        self::PAY_2 => ' Thanh toán online',

    ];

    const PAY_METHODS_ARR = [
        self::PAY_1,
        self::PAY_2,

    ];
    public function getPayMethodNameAttribute()
    {
        return self::PAY_METHODS[$this->pay_method];
    }
}
