<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventOrganizer extends Model
{
  use HasFactory;

  // public function event(): BelongsTo
  // {
  //   return $this->belongsTo(Event::class, 'event_id', 'id');
  // }

  public function scopeActive($query) {
    return $query->where('is_active', 1);
  }
};
