<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_bn', 'union_id'];

    public function union()
    {
        return $this->belongsTo(Union::class);
    }
}
