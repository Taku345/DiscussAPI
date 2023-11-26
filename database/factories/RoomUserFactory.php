<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room_User>
 */
class RoomUserFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {

    //複合主キーの重複を回避するロジック
    $idsA = User::all()->pluck('id');
    $idsB = Room::all()->pluck('id');
    $matrix = $idsA->crossJoin($idsB);
    $keypair = $this->faker->unique()->randomElement($matrix);
    return [
      'user_id' => $keypair[0],
      'room_id' => $keypair[1],
      'user_type' => '0', //ホスト、ゲスト、オブザーバー
      'joined_at' => $this->faker->dateTimeBetween('-30 days', '-15 days'),
      'last_read_at' => $this->faker->dateTimeBetween('-16 days', '+15 days'),
    ];
  }
}
