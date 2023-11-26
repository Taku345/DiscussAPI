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
    Schema::create('room_user', function (Blueprint $table) {
      // $table->id();
      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('room_id')->constrained('rooms');
      $table->primary(['user_id', 'room_id']);
      $table->tinyInteger('user_type')->default('0'); //ホスト、ゲスト、オブザーバー
      $table->timestamp('joined_at')->useCurrent();
      $table->timestamp('last_read_at')->nullable(true);
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('room_user', function (Blueprint $table) {
      //
    });
  }
};
