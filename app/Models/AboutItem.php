<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_bn',
        'description_en',
        'description_bn',
        'image',
    ];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
}
