<?php

namespace App\Jobs;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateStateEvents implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * Create a new job instance.
   *
   * @return void
   */

  public function __construct()
  {
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    $events = Event::whereIn('state_event', [1,2])->get();
    foreach ($events as $event) {
      $eventDate = Carbon::parse($event->date_event)->startOfDay();
      if(!now()->startOfDay()->lessThanOrEqualTo($eventDate)){
        $event->update([ 'state_event' => 0 ]);
      }
    }
  }
}
