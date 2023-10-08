<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=20; $i++){
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
                'total' => 1000000,
                'status' => 'pending',
            ]);
        }
    }
}
