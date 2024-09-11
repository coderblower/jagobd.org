<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id', 
        'division_id', 
        'district_id', 
        'upazila_id', 
        'union_id', 
        'ward_id'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function upazila()
    {
        return $this->belongsTo(Upazila::class);
    }

    public function union()
    {
        return $this->belongsTo(Union::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
