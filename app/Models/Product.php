<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = [
        'brand_id', 'name', 'slug', 'description', 'quantity',
        'price', 'sale_price', 'status', 'featured', 'cate_id', 'pro_image'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'quantity'  =>  'integer',
        'brand_id'  =>  'integer',
        'status'    =>  'boolean',
        'featured'  =>  'boolean'
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

    public function getStatusNameAttribute()
    {
        return self::STATUSES[$this->status];
    }

    /**
     * @param $value
     */
    public function category()
    {
        return $this->belongsTo(Product_categories::class, 'cate_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'brand_id');
    }

    public function setFilenamesAttribute($value)
    {
        $this->attributes['pro_image'] = json_encode($value);
    }
    public function checkouts()
    {
        return $this->hasMany(Checkouts::class);
    }
    public function transposts()
    {
        return $this->hasMany(Transposts::class);
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlists::class, 'product_id');
    }
}
