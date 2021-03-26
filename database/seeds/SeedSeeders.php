<?php

use Illuminate\Database\Seeder;
use App\Seed;
use Faker\Generator as Faker;


class SeedSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $seeds = new Seed();
            $seeds->type = $faker->word();
            $seeds->price = $faker->numberBetween(0, 1000);
            $seeds->save();
        }
    }
}
