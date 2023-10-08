<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('products')->insert([
                    'brand_id' => 1,
                    'cate_id' => 2,
                    'name' => 'San pham '.$i,
                    'slug' => 'San pham '.$i,
                    'pro_image' => 'product.jpg',
                    'description' => 'Mo ta san pham',
                    'quantity' => 1000,
                    'price' => 500000,
                    'sale_price' => 420000,
                    'status' => 1,
                    'featured' => 2,
                    'review' => "OKKK"
                ]
            );
        }
    }
}
