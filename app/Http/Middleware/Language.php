<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use App;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Session::has('locale')){
            $locale = Session::get('locale');
        }
        elseif(env('DEFAULT_LANGUAGE') != null){
            $locale = env('DEFAULT_LANGUAGE');
        }
        else{
            $locale = 'en';
        }

        app()->setLocale($locale);
       $request->session()->put('locale', $locale);
//        dd(session('locale'));
        return $next($request);
    }
}
