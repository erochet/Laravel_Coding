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
        DB::table('ads')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'categoty_id' => Str::random(10),
            'picture' => Str::random(10),
            'price' => Int::random(10),
            'comune' => Str::random(10),
        ]);
    }
}
