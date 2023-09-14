<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_categories extends Model
{
    protected $primaryKey = 'cate_id';

    protected $fillable = [
        'name',
        'description',
        'logo',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'cate_id');
    }

}
