<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Message extends Model
{
  use HasApiTokens, HasFactory, Notifiable;


  // public function user(): BelongsTo
  // {
  //   return $this->belongsTo(User::class);
  // }

  // public function room(): BelongsTo
  // {
  //   return $this->belongsTo(Room::class);
  // }

  public function room_user(): BelongsTo
  {
    return $this->belongsTo(
      Room_User::class,
      ['user_id', 'room_id'],
      ['user_id', 'room_id']
    );
  }
}
