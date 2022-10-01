<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class Language extends Controller
{
     public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            session()->put('applocale', $lang);
        }
        return redirect()->back();
    }
}
