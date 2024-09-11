<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BnmtvLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'bnmtv_id'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bnmtv()
    {
        return $this->belongsTo(Bnmtv::class);
    }
}
