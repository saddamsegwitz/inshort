<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        $language = 'en';
        if ($request->input('language')) {
            $language = $request->input('language');
            session()->put('language', $language);
        } elseif ($request->input('language')) {
            $language = session()->get('language');
        }

        app()->setLocale($language);
        return $next($request);
    }
}