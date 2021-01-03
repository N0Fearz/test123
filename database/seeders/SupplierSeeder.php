<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('suppliers')->insert([
        'company_name' => 'VDL',
        'contact_name' => 'Gerrie',
        'phone' => '0610425365',
        'email' => 'gerrie@vdl.nl',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);
    DB::table('suppliers')->insert([
        'company_name' => 'NTS',
        'contact_name' => 'Fonnie',
        'phone' => '0610425365',
        'email' => 'fonnie@nts.nl',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);
    DB::table('suppliers')->insert([
        'company_name' => 'Brans',
        'contact_name' => 'Richard',
        'phone' => '0610425365',
        'email' => 'richard@brans.nl',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);
    }
}
