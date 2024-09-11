<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonFamily extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'member_id',
        'reason',
        'expected_amount',
        'document_image',
    ];
}