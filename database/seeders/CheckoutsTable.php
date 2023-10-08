<?php

namespace Database\Seeders;

use App\Models\Checkouts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CheckoutsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=20; $i++){
            DB::table('checkouts')->insert([
                'order_id' => $i,
                'product_id' => $i,
                'quantity' => $i,
                'total_price' => 10000 * $i,
            ]);
        }
    }
}
