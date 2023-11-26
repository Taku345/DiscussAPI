<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Message;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Room;
use App\Models\RoomUser;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $users = User::factory(10)->create();

    $this->call(UserSeeder::class); //テストユーザー追加

    $rooms = Room::factory(50)
      ->recycle($users)
      ->create();

    $room_users = RoomUser::factory(200)
      ->create();

    Message::factory(1000)
      ->create();
  }
}
