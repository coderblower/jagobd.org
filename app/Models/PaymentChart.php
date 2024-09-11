<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentChart extends Model
{
    use HasFactory;
    protected $fillable = ['member_id', 'position_id', 'amount'];

    public function user()
    {
        return $this->belongsTo(User::class, 'member_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
