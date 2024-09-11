<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_bn',
        'image1',
        'image2',
        'description_en',
        'description_bn',
    ];

    public function aboutItems()
    {
        return $this->hasMany(AboutItem::class);
    }
}
