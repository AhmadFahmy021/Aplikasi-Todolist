<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lists extends Model
{
    use HasFactory;

    protected $table = 'list';

    protected $guarded = ['id'];

  /**
   * Get all of the todo for the Lists
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function todo(): HasMany
  {
      return $this->hasMany(Todo::class, 'list_id', 'id');
  }

  /**
   * Get all of the collab for the Lists
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function collab(): HasMany
  {
      return $this->hasMany(Collab::class, 'list_id', 'id');
  }
}
