<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Subscription;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Subscription $resource
 */
class SubscriptionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'plan' => $this->resource->plan,
            'is_expired' => $this->resource->isExpired(),
            'expires_at' => $this->resource->expires_at?->format('Y-m-d H:i:s'),
            'days_left' => max(0, (int) now()->diffInDays($this->resource->expires_at)),
        ];
    }
}
