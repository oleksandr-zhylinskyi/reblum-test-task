<?php

declare(strict_types=1);

namespace app\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use app\Http\Requests\Web\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request): Response
    {
        if (!Auth::attempt($request->validated())) {
            throw ValidationException::withMessages(['email' => 'Invalid credentials.']);
        }

        $request->session()->regenerate();

        return response()->noContent();
    }

    public function logout(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->noContent();
    }
}
