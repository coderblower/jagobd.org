<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratting extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating_user', 'rated_user', 'rating', 'review'
    ];
    
    // public function rater()
    // {
    //     return $this->belongsTo(User::class, 'rating_user');
    // }

    // public function rated()
    // {
    //     return $this->belongsTo(User::class, 'rated_user');
    // }
}
