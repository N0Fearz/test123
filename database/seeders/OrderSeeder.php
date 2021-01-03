<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'customer_id' => 1,
            'rounded' => false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('orders')->insert([
            'customer_id' => 2,
            'rounded' => false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('orders')->insert([
            'customer_id' => 2,
            'rounded' => false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
