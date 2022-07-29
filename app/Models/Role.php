<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(\User::class, 'user_role_id');
    }

    // Guarding Important
    protected $guarded = ['id'];
}
