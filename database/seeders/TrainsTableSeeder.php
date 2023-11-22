<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $train = new Train();
            $train->agency = $faker->word();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure_time =  $faker->dateTime();
            $train->arrival_time =  $faker->dateTime();
            $train->train_code =$faker->randomNumber(5, false);
            $train->carriages_number = $faker->numberBetween(1 , 20);
            $train->in_time =$faker->boolean();
            $train->delete =$faker->boolean();

            $train->save();

        }
    }
};
