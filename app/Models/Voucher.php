<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'type',
        'value',
        'expiration_date',
        'min_order_value',
        'max_uses',
        'uses',
        'active'

    ];
}
