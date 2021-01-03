<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Daan',
            'password' => Hash::make('D@@n123'),
            'email' => 'daan@wesg.com',
            'role_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'username' => 'Jannick',
            'password' => Hash::make('J@nn1ck1987'),
            'email' => 'jannick@wesg.com',
            'role_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'username' => 'Marij',
            'password' => Hash::make('M@r1j'),
            'email' => 'marij@wesg.com',
            'role_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
