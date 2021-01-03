<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'stock_id' => 1,
            'artikelnummer' => 'Schroefp4.5',
            'description' => 'Schroefp4.5	Parker schroef 4.5mm (doos 50 st)',
            'price' => 3.95,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'stock_id' => 2,
            'artikelnummer' => 'Schroefp5.0',
            'description' => 'Parker schroef 5.0mm (doos 50 st)',
            'price' => 4.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'stock_id' => 3,
            'artikelnummer' => 'DiamB8',
            'description' => 'Diamantboor M8',
            'price' => 12,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'stock_id' => 4,
            'artikelnummer' => 'PVC0.5',
            'description' => 'PVC folie 0.5mm 1m2',
            'price' => 1.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'stock_id' => 5,
            'artikelnummer' => 'EPDM0.8',
            'description' => 'EPDM rubber folie 0.8mm 1m2',
            'price' => 3.60,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'stock_id' => 6,
            'artikelnummer' => 'Emm10l',
            'description' => '10L emmer',
            'price' => 1.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
