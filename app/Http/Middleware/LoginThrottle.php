<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\LoginAttempt;
use Illuminate\Support\Str;

class LoginThrottle
{
    public function handle($request, Closure $next, $maxAttempts = 5, $decayMinutes = 15)
    {
        $key = $this->resolveRequestSignature($request);

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $seconds = RateLimiter::availableIn($key);

            LoginAttempt::createAttempt($request->only('email'), false, 'Too many attempts');

            abort(429, 'Too many login attempts. Please try again in ' . ceil($seconds / 60) . ' minutes.');
        }

        RateLimiter::hit($key, $decayMinutes * 60);

        return $next($request);
    }

    protected function resolveRequestSignature($request)
    {
        return Str::lower($request->input('email')) . '|' . $request->ip();
    }
}