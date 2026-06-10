<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    public function run(): void
    {
        $cases = [
            ['label' => 'trial', 'factory' => fn() => Subscription::factory()->trial()],
            ['label' => 'monthly', 'factory' => fn() => Subscription::factory()->monthly()],
            ['label' => 'annual', 'factory' => fn() => Subscription::factory()->annual()],
            ['label' => 'monthly-expired', 'factory' => fn() => Subscription::factory()->monthly()->expired()],
        ];

        foreach ($cases as $case) {
            $user = User::factory()->create([
                'email' => "{$case['label']}@example.com",
            ]);

            ($case['factory']())
                ->for($user)
                ->create();
        }
    }
}
