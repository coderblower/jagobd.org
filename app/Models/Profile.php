<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id', 'id_name', 'id_name_bn', 'position_id', 'organization_id',
        'committee_id', 'recommended_by', 'rating', 'father_en', 'father_bn',
        'profile_photo', 'nid_front', 'nid_back', 'dob', 'age', 'gender',
        'place_of_birth', 'nid_number', 'document_type', 'division',
        'district', 'upazila', 'union', 'ward', 'requestId', 'responseID'
    ];
}
