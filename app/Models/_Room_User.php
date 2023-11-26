<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Room_User extends Model
{
  use HasApiTokens, HasFactory, Notifiable;
  protected $table = 'room_user';
  // branch テスト
  // モデル名の変更テスト

  public function messages(): HasMany
  {
    return $this->hasMany(
      Massage::class,
      ['user_id', 'room_id'],
      ['user_id', 'room_id']
    );
  }
}
