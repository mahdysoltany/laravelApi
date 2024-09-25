<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // ایجاد 10 محصول فیک
        for ($i = 0; $i < 10; $i++) {
            product::create([
                'name' => $faker->name,
                'price' => $faker->randomNumber($nbDigits = 2, $strict = true)*1000,
                'count' =>$faker->randomNumber($nbDigits = 2, $strict = true),
                'description' => $faker->text,
                'discount_date' => $faker->dateTimeThisYear,
                'Weight' =>$faker->randomNumber($nbDigits = 1, $strict = true)*100,
                'deliveryTime' => $faker->dateTimeThisYear,
                'category_id' => $faker->randomNumber($nbDigits = 1, $strict = true),

            ]);
        }
    }
}
