<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property User $resource
 */
class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'email' => $this->resource->email,
            'first_name' => $this->resource->first_name,
            'last_name' => $this->resource->last_name,
            'subscription' => new SubscriptionResource($this->resource->subscription),
        ];
    }
}
