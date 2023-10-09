<?php

namespace Database\Seeders;

use App\Models\Wishlists;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'username' => 'hai.123',
                'password' => bcrypt('admin123'),
                'role' => '1',
            ]
        ]);
        for ($i = 2; $i <= 20; $i++) {
            DB::table('users')->insert([
                [
                    'name' => 'User' . $i,
                    'email' => $i . 'user@gmail.com',
                    'username' => 'hai.123',
                    'password' => bcrypt('admin123'),
                    'role' => '0',
                ]
            ]);
        }
        for ($i = 1; $i <= 20; $i++) {
            DB::table('branches')->insert([
                [
                    'name' => 'User' . $i,
                    'slug' => 'User'.$i,
                    'logo' => 'logo.jpg',

                ]
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            DB::table('product_categories')->insert([
                [
                    'name' => 'product-categories' . $i,
                    'description' => 'ok',

                ]
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            DB::table('orders')->insert([
                'order_number' => $i,
                'user_id' => $i,
                'name' => 'Khach Dat Hang',
                'phone' => '0337792097',
                'city' => 'Da Nang',
                'district' => 'Lien Chieu',
                'specific_address' => 'Hoa Minh',
                'quantity' => 4,
                'ship_method' => 1,
                'pay_method' => 1,
                'total' => 1000,
                'status' => 'pending',
            ]);
        }

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

        for($i = 1; $i <=20; $i++){
            DB::table('checkouts')->insert([
                'order_id' => $i,
                'product_id' => $i,
                'quantity' => $i,
                'total_price' => 10000 * $i,
            ]);
        }
        for($i = 1; $i <= 10; $i++){
            DB::table('wishlists')->insert([
                'user_id' => 1,
                'product_id' => $i,
            ]);
        }
    }
}
