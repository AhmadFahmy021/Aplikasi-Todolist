<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collab extends Model
{
    use HasFactory;

    protected $table = 'collab';
    protected $guarded = ['id'];

    /**
     * Get all of the list for the Collab
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function list(): HasMany
    {
        return $this->hasMany(Lists::class);
    }

    /**
     * Get the user that owns the Collab
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
