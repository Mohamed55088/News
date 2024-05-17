<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request as request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            if (request::is('dashboard/admin')) {
                return route('admin.login');
            } elseif (Request::is('login')) {
                return route('login');
            }
        }

        // Add a default return statement to handle other cases
        return null;
    }
}
