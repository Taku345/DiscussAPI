<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'user_id' => User::factory(),
      'name' => $this->faker->realText($maxNbChars = 20),
      'description' => $this->faker->realText($maxNbChars = 50),
      'started_at' => $this->faker->dateTimeBetween('-30 days', '-15 days'),
      'finished_at' => $this->faker->dateTimeBetween('-16 days', '+15 days'),
    ];
  }
}
