<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleCategory extends Model
{
    use HasFactory;

    public function schedules()
    {
        return $this->hasMany(\Schedule::class, 'schedule_category_id');
    }

    // Guarding Important
    protected $guarded = ['id'];
}
