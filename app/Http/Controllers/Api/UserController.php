<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function getMyUser(): UserResource
    {
        $currentUser = auth()->user();

        return new UserResource($currentUser->load('subscription'));
    }
}
