<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Ad;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ad::factory()
                ->times(20)
                ->create();
    }
    
}
