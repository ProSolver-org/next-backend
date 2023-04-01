<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /*     public function handle(Request $request, Closure $next): Response
    { */
    /* public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', ' Origin, Content-Type, Accept, Authorization, X-Request-With')
            ->header('Access-Control-Allow-Credentials', ' true');
    } */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS');
        // $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-XSRF-TOKEN');
        $response->headers->set('Access-Control-Allow-Headers', ' Origin, Content-Type, Accept, Authorization, X-Request-With');
        $response->headers->set('Access-Control-Allow-Credentials', ' true');
        return $response;
    }
}