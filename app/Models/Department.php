<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Department extends Model
{
    use HasFactory;

    public function classrooms()
    {
        return $this->hasMany(Classroom::class, 'class_department_id');
    }

    public function subjects()
    {
        return $this->hasMany(Department::class, 'subject_department_id');
    }

    // Guarding Important
    protected $guarded = ['id'];
}
