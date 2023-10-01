<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
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
}
