<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
           'title'=>'Web Design',
            'icon'=>'fa-podcast',
            'icon_color'=>'icon-red',
            'description'=>'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.',
        ]);
        DB::table('services')->insert([
            'title'=>'Web Design',
            'icon'=>'fa-podcast',
            'icon_color'=>'icon-yellow',
            'description'=>'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.',
        ]);
        DB::table('services')->insert([
            'title'=>'Web Design',
            'icon'=>'fa-podcast',
            'icon_color'=>'icon-blue',
            'description'=>'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.',
        ]);
        DB::table('services')->insert([
            'title'=>'Web Design',
            'icon'=>'fa-podcast',
            'icon_color'=>'icon-red',
            'description'=>'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.',
        ]);
        DB::table('services')->insert([
            'title'=>'Web Design',
            'icon'=>'fa-podcast',
            'icon_color'=>'icon-red',
            'description'=>'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.',
        ]);
        DB::table('services')->insert([
            'title'=>'Web Design',
            'icon'=>'fa-podcast',
            'icon_color'=>'icon-red',
            'description'=>'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet.',
        ]);
    }
}
