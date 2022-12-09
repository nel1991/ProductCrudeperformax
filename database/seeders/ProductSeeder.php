<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('product')->insert([
            'title'=>Str::random(10),
            'content'=>Str::random(10),
            'image'=> fake()->imageUrl($width=400, $height=400)

        ]);
    }
}
