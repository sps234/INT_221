<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo rand() . "<br>";
        $language = $request->session()->get('lang');
        if ( $language ) {
            \App::setLocale( $language );
            echo "lang set to $language";
        }
        else {
            echo "lang not set";
        }
        return $next($request);
    }
}
