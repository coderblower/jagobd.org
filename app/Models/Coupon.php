<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'type',
        'value',
        'usage_limit',
        'used',
        'min_purchase',
        'expires_at',
    ];

    // Define if the coupon is still valid
    public function isValid()
    {
        return (!$this->isExpired() && !$this->isUsageLimitReached());
    }

    public function isExpired()
    {
        return $this->expires_at && $this->expires_at < now();
    }

    public function isUsageLimitReached()
    {
        return $this->usage_limit && $this->used >= $this->usage_limit;
    }
}
