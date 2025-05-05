<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $services = [
            [
                'name' => 'Men\'s Haircut',
                'description' => 'A classic men\'s haircut tailored to your style.',
                'price' => 20.00,
                'duration' => 30,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'haircut'),
            ],
            [
                'name' => 'Women\'s Haircut',
                'description' => 'A stylish cut for women, customized to your preference.',
                'price' => 30.00,
                'duration' => 45,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'haircut'),
            ],
            [
                'name' => 'Hair Coloring',
                'description' => 'Professional hair coloring with premium products.',
                'price' => 50.00,
                'duration' => 90,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'hair coloring'),
            ],
            [
                'name' => 'Hair Wash & Blow Dry',
                'description' => 'A relaxing hair wash followed by a blow dry.',
                'price' => 15.00,
                'duration' => 20,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'hair wash'),
            ],
            [
                'name' => 'Beard Trim',
                'description' => 'Precision beard trimming and shaping.',
                'price' => 10.00,
                'duration' => 15,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'beard'),
            ],
            [
                'name' => 'Haircut & Coloring Combo',
                'description' => 'A combination of haircut and full hair coloring.',
                'price' => 70.00,
                'duration' => 120,
                'is_combo' => true,
                'image' => $faker->imageUrl(640, 480, 'hair combo'),
            ],
            [
                'name' => 'Kids Haircut',
                'description' => 'A fun and quick haircut for children.',
                'price' => 15.00,
                'duration' => 25,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'kids haircut'),
            ],
            [
                'name' => 'Hair Treatment',
                'description' => 'Deep conditioning treatment for healthy hair.',
                'price' => 25.00,
                'duration' => 40,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'hair treatment'),
            ],
            [
                'name' => 'Shave',
                'description' => 'A traditional straight razor shave.',
                'price' => 12.00,
                'duration' => 20,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'shave'),
            ],
            [
                'name' => 'Perm',
                'description' => 'Professional perming for curly hair styles.',
                'price' => 60.00,
                'duration' => 100,
                'is_combo' => false,
                'image' => $faker->imageUrl(640, 480, 'perm'),
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}