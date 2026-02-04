<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technology =[
            [
                'name' => 'Laravel',
                'description' => 'A PHP framework for web artisans.',
                'logo' => 'laravel-logo.png'
            ],
            [
                'name' => 'Vue.js',
                'description' => 'A progressive JavaScript framework for building user interfaces.',
                'logo' => 'vuejs-logo.png'
            ],
            [
                'name' => 'React',
                'description' => 'A JavaScript library for building user interfaces.',
                'logo' => 'react-logo.png'
            ],
            [
                'name' => 'Django',
                'description' => 'A high-level Python web framework that encourages rapid development.',
                'logo' => 'django-logo.png'
            ],
            [
                'name' => 'Flutter',
                'description' => 'An open-source UI software development kit created by Google.',
                'logo' => 'flutter-logo.png'
            ]
        ];
        foreach($technology as $techData){
            $newTech = new Technology();
            $newTech->name = $techData['name'];
            $newTech->description = $techData['description'];
            $newTech->logo = $techData['logo'];
            $newTech->save();
        }
    }
}
