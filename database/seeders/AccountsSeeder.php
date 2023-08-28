<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'user_id' => 1,
            'number' => rand(100000000, 999999999),
        ]);
        DB::table('accounts')->insert([
            'user_id' => 2,
            'number' => rand(100000000, 999999999),
        ]);
        DB::table('accounts')->insert([
            'user_id' => 2,
            'number' => rand(100000000, 999999999),
        ]);
        DB::table('accounts')->insert([
            'user_id' => 3,
            'number' => rand(100000000, 999999999),
        ]);
    }
}
