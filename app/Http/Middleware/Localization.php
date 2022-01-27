<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;
use Session;
// use URL;
class Localization
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
        //url()->defaults(['locale' => $request->user()->locale]);
        $locale = $request->segment(1);
        if($locale) {
            if (in_array($locale, config('app.available_locales'))) {
                App::setLocale($locale);
                session()->put('locale', $locale);
                return $next($request);
            } else {
                if($request->isMethod('get')) {
                    return abort(404);
                }
                return $next($request);
            }
        } else {
            if (Session::has('locale')) {
                App::setLocale(Session::get('locale'));
            }
            return redirect('/'.App::currentLocale());
        }
    }
}
