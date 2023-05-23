<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,30) as $index)
        {
            Product::create([
                'name' => $faker->name,
                'slug' => Str::slug($faker->name),
                'category_id' => $faker->randomNumber(),
                'brand_id' => $faker->randomNumber(),
                'price' => '200',
                'qty' => '20',
                'short_description' => $faker->sentence,
                'long_description' => $faker->sentence,
                'image' => '1683477718.jpg',
                'gallery_image' => '["6457dfc96a662_1683480521.avif","6457dfc96a901_1683480521.jpg","6457dfc96ab16_1683480521.jpg","6457dfc96ad7c_1683480521.jpg","6457dfc96afaf_1683480521.webp"]',
                'type' => 'top',
            ]);
        }

        foreach (range(1,30) as $index)
        {
            Product::create([
                'name' => $faker->name,
                'slug' => Str::slug($faker->name),
                'category_id' => $faker->randomNumber(),
                'brand_id' => $faker->randomNumber(),
                'price' => '200',
                'qty' => '20',
                'short_description' => $faker->sentence,
                'long_description' => $faker->sentence,
                'image' => '1683477718.jpg',
                'gallery_image' => '["6457dfc96a662_1683480521.avif","6457dfc96a901_1683480521.jpg","6457dfc96ab16_1683480521.jpg","6457dfc96ad7c_1683480521.jpg","6457dfc96afaf_1683480521.webp"]',
                'type' => 'new',
            ]);
        }

        foreach (range(1,30) as $index)
        {
            Product::create([
                'name' => $faker->name,
                'slug' => Str::slug($faker->name),
                'category_id' => $faker->randomNumber(),
                'brand_id' => $faker->randomNumber(),
                'price' => '200',
                'qty' => '20',
                'short_description' => $faker->sentence,
                'long_description' => $faker->sentence,
                'image' => '1683477718.jpg',
                'gallery_image' => '["6457dfc96a662_1683480521.avif","6457dfc96a901_1683480521.jpg","6457dfc96ab16_1683480521.jpg","6457dfc96ad7c_1683480521.jpg","6457dfc96afaf_1683480521.webp"]',
                'type' => 'discount',
            ]);
        }
    }
}
