<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Achievements extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'required_number_of_tasks',
        'achievement_group_id'
    ];

    /**
     * Get the group of the achievement.
     */
    public function group() : BelongsTo
    {
        return $this->belongsTo(AchievementGroup::class);
    }
}
