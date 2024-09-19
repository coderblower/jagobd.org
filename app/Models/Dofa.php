<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dofa extends Model
{


    protected $fillable = ['image-mini', 'image-large', 'title', 'description'];

    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Only generate slug if it's not already set
            if (!$model->slug) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
