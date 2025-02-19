<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CacheControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
            // Log::info('Request path: ' . $request->path());
        // cache the static files
        if ($request->is('assets/*')) {
            $response->headers->set('Cache-Control', 'max-age=2592000, public');
            $response->headers->set('Expires', gmdate('D, d M Y H:i:s \G\M\T', time() + 2592000));
        }

        return $response;
    }
}
