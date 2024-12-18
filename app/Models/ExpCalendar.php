<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpCalendar extends Model
{
  protected $table = 'exp_calendars'; // テーブル名
  protected $fillable = [
    'skill_id',
    'exp',
    'created_at',
  ];

  public function skill(): BelongsTo
  {
    return $this->belongsTo(Skill::class);
  }
}
