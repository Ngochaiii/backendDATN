<?php

namespace Database\Seeders;

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

        DB::table('users')->insert([
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'username' => 'hai.123',
                'password' => bcrypt('admin123'),
                'role'=> '0',
            ]
        ]);
    }
}
