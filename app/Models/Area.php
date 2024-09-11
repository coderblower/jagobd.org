<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_bn', 'ward_id', 'city_code'];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
