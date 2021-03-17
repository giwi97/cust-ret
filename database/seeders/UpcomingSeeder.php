<?php

namespace Database\Seeders;

use App\Models\Upcoming;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UpcomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($iterator = 0;$iterator < 5; $iterator++){

            Upcoming::create([
                'completed' => false,
                'title' => $faker->sentence($nbWords = 4, $variableWords = false),
                'approved' => false,
                'waiting' => true,
                'taskId' => Str::random(10)
            ]);

        }
    }
}
