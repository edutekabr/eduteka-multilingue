<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class UserLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $ip = $request->ip();
        $locale = $request->query('lang') ?? $request->cookie('usr_lang');

        if (!in_array($locale, ['pt_BR', 'en'])) {
            $locale = App::currentLocale();
        }

        App::setLocale($locale);

        $response = $next($request);

        if($request->query('lang') !== $request->cookie('usr_lang')) {
            return $response->cookie(cookie('usr_lang', $locale, 120));
        }

        return $response;
    }
}
