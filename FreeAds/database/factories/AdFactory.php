<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
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
