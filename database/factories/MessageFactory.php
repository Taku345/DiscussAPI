<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    //user_roomテーブルからidをランダムに取得
    $keyPair = RoomUser::inRandomOrder()->select('user_id', 'room_id')->first();
    return [
      'user_id' => $keyPair['user_id'],
      'room_id' => $keyPair['room_id'],
      'message' => $this->faker->realText($maxNbChars = 30),
    ];
  }
}
