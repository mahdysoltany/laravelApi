<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $faker = Faker::create();

        // // ایجاد 10 کاربر فیک
        // for ($i = 0; $i < 10; $i++) {
        //     User::create([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => Hash::make('password'), // پسورد ثابت برای تمامی کاربران
        //         'phone' => $faker->regexify('\+98[0-9]{10}'), // شماره تلفن با فرمت ایران
        //         'Date' => $faker->dateTimeThisYear

        //     ]);
        // }
    }
}
