<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dofa extends Model
{


    protected $fillable = ['image-mini', 'image-large', 'title', 'description'];

    use HasFactory;
}
