<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "image",
        "version",
        "description",
        "content",
        "type",
        "status",
        "cate_id",
        "brand_id",
        "created_at",

    ];

    const NOTICATE = 1;
    const FIX = 2;
    const UPDATE = 3;
    const OTHER = 99;
    const TYPE_ARR = [
        self::NOTICATE,
        self::UPDATE,
        self::FIX,
        self::OTHER,
    ];
    const TYPES = [
        self::NOTICATE => 'noticate',
        self::UPDATE => 'update',
        self::FIX => 'fix',
        self::OTHER => 'other'
    ];

    const STATUS_DISABLE = 0;
    const STATUS_ENABLE = 1;
    const STATUSES_ARR = [
        self::STATUS_DISABLE,
        self::STATUS_ENABLE
    ];

    const STATUSES = [
        self::STATUS_ENABLE => 'Hiển thị',
        self::STATUS_DISABLE => 'Ẩn',
    ];


    public function getTypeNameAttribute()
    {
        return self::TYPES[$this->type];
    }

    public function getStatusNameAttribute()
    {
        return self::STATUSES[$this->status];
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ENABLE);
    }
    public function category()
    {
        return $this->belongsTo(Product_categories::class, 'cate_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'brand_id');
    }
}
