<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
  use HasFactory;

  /**
   * Get all of the comments for the Blog
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function comments(): HasMany
  {
      return $this->hasMany(BlogComments::class, 'blog_id', 'id');
  }

  public function scopeActive($query) {
    return $query->where('is_active', 1);
  }
}
