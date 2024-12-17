<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'created_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function exp_calendars(): HasMany
    {
        return $this->hasMany(ExpCalendar::class);
    }
    public function skill_details(): HasMany
    {
        return $this->hasMany(SkillDetail::class);
    }
}
