<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $primaryKey = 'brand_id';
    /**
     * @var string
     */


    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'logo'];

    public function products() {
        return $this->hasMany(Product::class , 'brand_id');
    }

}
