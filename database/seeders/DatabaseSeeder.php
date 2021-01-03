<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleSeeder::class,
            CustomerSeeder::class,
            OrderRulesSeeder::class,
            OrderSeeder::class,
            RoleSeeder::class,
            StockSeeder::class,
            SupplierArticleSeeder::class,
            SupplierSeeder::class,
            UnitSeeder::class,
            UserSeeder::class,
        ]);
    }
}
