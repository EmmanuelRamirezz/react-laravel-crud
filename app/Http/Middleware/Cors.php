<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        return $next($request)
            ->header("Access-Control-Allow-Origin", "*")
            ->header("Access-Control-Allow-Methods", "POST, GET, OPTIONS, PUT, DELETE")
            ->header("Access-Control-Allow-Headers", "Content-Type, Authorization");



        // $response = $next($request);

        // $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:5173');
        // $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
        // $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');

        // return $response;
    }
}
