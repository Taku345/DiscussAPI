<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Room extends Model
{
  use HasFactory, HasApiTokens, Notifiable;

  public function hostUser(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function roomUsers(): HasMany
  {
    return $this->hasMany(Room_User::class);
  }

  // public function messages(): HasMany
  // {
  //   return $this->hasMany(Massage::class);
  // }

  public function joinedUsers(): BelongsToMany
  {
    return $this->belongsToMany(User::class);
  }

  protected $fillable = [
    'user_id',
    'name',
    'description',
    'started_at',
    'finished_at',
  ];
}
