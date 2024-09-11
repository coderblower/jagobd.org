<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartyMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_bn',
        'image',
        'committee_id',
        'position_id',
        'organization_id',
        'party_name_en',
        'party_name_bn',
    ];
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function committee()
    {
        return $this->belongsTo(Committee::class);
    }
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
