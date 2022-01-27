<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('lng')) {
    function lng() {
        return app()->getLocale();
    }
}