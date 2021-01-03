<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock')->insert([
            'article_id' => 1,
            'unit_id' => 1,
            'number' => 30,
            'location' => 'gg30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('stock')->insert([
            'article_id' => 2,
            'unit_id' => 1,
            'number' => 56,
            'location' => 'bb30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('stock')->insert([
            'article_id' => 5,
            'unit_id' => 3,
            'number' => 30,
            'location' => 'ee30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('stock')->insert([
            'article_id' => 3,
            'unit_id' => 1,
            'number' => 50,
            'location' => 'cc30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('stock')->insert([
            'article_id' => 4,
            'unit_id' => 3,
            'number' => 10,
            'location' => 'dd30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('stock')->insert([
            'article_id' => 6,
            'unit_id' => 2,
            'number' => 30,
            'location' => 'aa30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
