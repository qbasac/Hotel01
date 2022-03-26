<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
  use HasFactory;
  protected $fillable = [
    'state_event'
  ];

  /**
   * Get all of the comments for the Event
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function eventOrganizerDetail(): HasMany
  {
    return $this->hasMany(EventOrganizerDetail::class, 'event_id', 'id');
  }

}
