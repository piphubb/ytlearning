<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Create crud application using Laravel 9',
            'content' => "when an unknown printer took a galley of type and scrambled it to make a type specimen book. "
        ]);
        DB::table('posts')->insert([
            'title' => 'Create crud application using Laravel 9',
            'content' => "when an unknown printer took a galley of type and scrambled it to make a type specimen book. "
        ]);
    }
}
