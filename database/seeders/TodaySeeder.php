<?php

namespace Database\Seeders;

use App\Models\Today;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TodaySeeder extends Seeder
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

            Today::create([
                'completed' => false,
                'title' => $faker->sentence($nbWords = 4, $variableWords = false),
                'approved' => false,
                'taskId' => Str::random(10)
            ]);

        }
    }
}
