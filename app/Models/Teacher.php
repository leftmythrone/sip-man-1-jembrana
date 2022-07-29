<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Teacher extends Model
{
    use HasFactory;

    // Guarding Important
    protected $guarded = ['id'];
}
