<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Badge extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'order',
        'no_of_achievements'
    ];

    /**
     * Get the user that wrote the comment.
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
