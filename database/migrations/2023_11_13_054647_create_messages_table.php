<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('messages', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('room_user', 'user_id');
      $table->foreignId('room_id')->constrained('room_user', 'room_id');
      // $table->foreignId('user_id')->constrained('users');
      // $table->foreignId('room_id')->constrained('rooms');
      $table->text('message');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('messages', function (Blueprint $table) {
      //
    });
  }
};
