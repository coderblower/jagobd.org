<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_bn',
        'youtube_url',
        'video_embed_src',
        'description_en',
        'description_bn',
        'date',
    ];
}
