<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_articles')->insert([
            'article_id' => 1,
            'supplier_id' => 1,
            'price' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('supplier_articles')->insert([
            'article_id' => 2,
            'supplier_id' => 1,
            'price' => 30.5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('supplier_articles')->insert([
            'article_id' => 3,
            'supplier_id' => 1,
            'price' => 20.5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
