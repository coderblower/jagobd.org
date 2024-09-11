<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;
    protected $fillable = ['district_id', 'name_en', 'name_bn', 'url'];

    // If district_id is a foreign key
    public function district()
    {
        return $this->belongsTo(District::class); // Ensure District model exists and is properly set up
    }
}
