<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogComments extends Model
{
  use HasFactory;

  /**
   * Get the user that owns the BlogComments
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function blog(): BelongsTo
  {
    return $this->belongsTo(Blog::class, 'blog_id', 'id');
  }

  public function scopeActive($query)
  {
    return $query->where('is_active', 1);
  }
}
