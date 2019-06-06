<?php

namespace App\Http\Middleware;

use Closure;

class RudeWords
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $forbiddenwords = [
            'hate',
            'idiot',
            'stupid'
        ];

        foreach($forbiddenwords as $word) {
            if(strstr($request->content, $word)){
                return response(view('partials.forbidden-words'));
            }
        }
        return $next($request);
    }
}
