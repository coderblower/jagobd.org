<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NidVerification extends Model
{
    use HasFactory;

    protected $fillable = [
        'nid_no',
        'name_en',
        'name_bn',
        'father',
        'mother',
        'birth_date',
        'address',
        'gender',
        'nationality',
        'blood_group',
        'birth_place',
        'issue_date',
        'mrz',
        // 'face_match',
        'profile_image',
        'nid_front_image',
        'nid_back_image',
    ];
}
