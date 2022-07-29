<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Schedule extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(ScheduleCategory::class, 'schedule_category_id');
    }

    // Guarding Important
    protected $guarded = ['id'];
}
