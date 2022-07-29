<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Subject extends Model
{
    use HasFactory;

    public function departments()
    {
        return $this->belongsTo(Department::class, 'subject_department_id');
    }

    // Guarding Important
    protected $guarded = ['id'];
}
