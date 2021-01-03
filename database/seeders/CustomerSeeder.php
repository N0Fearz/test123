<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'company_name' => 'MooiBV',
            'contact_name' => 'Gerrie',
            'phone' => '061235685',
            'email' => 'gerrie@mooibv.nl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('customers')->insert([
            'company_name' => 'testBV',
            'contact_name' => 'Ronnie',
            'phone' => '061235685',
            'email' => 'ronnie@testbv.nl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
