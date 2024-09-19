<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coupon;
use Illuminate\Support\Str;

class CouponFactory extends Factory
{
    protected $model = Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => strtoupper(Str::random(8)), // Generates a random 8-character code
            'type' => $this->faker->randomElement(['fixed', 'percent']), // Randomly choose between fixed or percent
            'value' => $this->faker->randomFloat(2, 5, 50), // Generates a value between 5 and 50
            'usage_limit' => $this->faker->optional()->numberBetween(1, 100), // Optional usage limit, between 1 and 100
            'used' => 0, // Initial usage count
            'min_purchase' => $this->faker->optional()->randomFloat(2, 10, 100), // Optional minimum purchase
            'expires_at' => $this->faker->optional()->dateTimeBetween('+1 week', '+6 months'), // Optional expiration date
        ];
    }
}
