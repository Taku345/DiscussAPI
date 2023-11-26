<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use app\models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      'name' => 'test_user',
      'email' => 'test@test.com',
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'remember_token' => 'remember_token',
    ]);


    // echo ("Seeder done");
    // $faker = Faker::create('ja_JP');
    // $faker->seed(1234); // シード値を設定

    // foreach (range(1, 10) as $index) {
    //   DB::table('users')->insert([
    //     'name' => $faker->name,
    //     'email' => $faker->unique()->safeEmail,
    //     'email_verified_at' => now(),
    //     'password' => bcrypt('password'),
    //     'remember_token' => Str::random(10),
    //   ]);
    // }
  }
}
