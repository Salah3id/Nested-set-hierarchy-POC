<?php

Route::get('/language-to/{language}', function ($locale,$language) {
    if (isset($language) && in_array($language, config('app.available_locales'))) {
        session()->put('locale', $language);
        $redirect = redirect(preg_replace('/\/'.$locale.'/','/'.$language, url()->previous(), 1));
        app()->setLocale($language);
    } else {
        $redirect = abort(404);
    }
    return  $redirect;
})->name('change_lang');
