<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bnmtv extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_bn',
        'description_en',
        'description_bn',
        'video_url',
        'video_path',
        'thumbnail_url',
        'user_id',
        'like_count',
        'comment_count',
        'share_count',
        'status',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
