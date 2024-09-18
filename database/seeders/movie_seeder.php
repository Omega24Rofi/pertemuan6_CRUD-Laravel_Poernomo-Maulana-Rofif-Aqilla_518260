<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\movie;

class movie_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<10; $i++){
            movie::create([
                'title'=>fake()->sentence(3),
                'director'=>fake()->name(),
                'duration'=>fake()->numberBetween(15, 180),
                'release_date'=>fake()->date()
            ]);
        }
    }
}
