<?php

namespace App\Http\Middleware;

use Closure;
use DirectoryTree\Anonymize\Facades\Anonymize;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnableAnonymizer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (config('app.demo_mode')) {
            Anonymize::enable();
        }

        return $next($request);
    }
}
