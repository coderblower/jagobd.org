<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'bio', 'profile_picture',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}