<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eshowcase extends Model
{
    use HasFactory;

    protected $fillable = ['name_en', 'name_bn', 'description_en', 'description_bn', 'price','image','owner_user_id','status','product_images',];

}
