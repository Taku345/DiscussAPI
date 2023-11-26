<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RoomUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // $factory = new Faker;
    // $factory->define(Model::class, function (Faker $faker) {
    //   $idsA = User::all()->pluck('id');
    //   $idsB = Room::all()->pluck('id');
    //   $matrix = $idsA->crossJoin($idsB);
    //   $keypair = $faker->unique()->randomElement($matrix);
    //   return [
    //     'aid' => $keypair[0],
    //     'bid' => $keypair[1],
    //   ];
    // });
  }
}
