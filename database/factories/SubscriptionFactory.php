<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subscription>
 */
class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'plan' => 'monthly',
            'starts_at' => now(),
            'expires_at' => now()->addMonth(),
            'cancelled_at' => null,
        ];
    }

    public function trial(): static
    {
        return $this->state([
            'plan' => 'trial',
            'starts_at' => now(),
            'expires_at' => now()->addDays(14),
        ]);
    }

    public function monthly(): static
    {
        return $this->state([
            'plan' => 'monthly',
            'starts_at' => now(),
            'expires_at' => now()->addMonth(),
        ]);
    }

    public function annual(): static
    {
        return $this->state([
            'plan' => 'annual',
            'starts_at' => now(),
            'expires_at' => now()->addYear(),
        ]);
    }

    public function expired(): static
    {
        return $this->state([
            'starts_at' => now()->subMonths(2),
            'expires_at' => now()->subMonth(),
        ]);
    }
}
