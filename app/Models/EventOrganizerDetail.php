<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EventOrganizerDetail extends Model
{
  use HasFactory;

  protected $fillable = ['event_id', 'organizer_id'];

  /**
   * Get the user associated with the EventOrganizerDetail
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */

  public function organizer(): HasOne
  {
    return $this->hasOne(EventOrganizer::class, 'id', 'organizer_id');
  }
}
