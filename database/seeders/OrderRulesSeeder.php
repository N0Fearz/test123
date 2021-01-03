<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_rules')->insert([
            'order_id' => 1,
            'article_id' => 1,
            'unit_id' => 1,
            'aantal' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order_rules')->insert([
            'order_id' => 2,
            'article_id' => 2,
            'unit_id' => 1,
            'aantal' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('order_rules')->insert([
            'order_id' => 3,
            'article_id' => 3,
            'unit_id' => 3,
            'aantal' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
