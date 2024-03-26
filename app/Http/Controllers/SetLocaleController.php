<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetLocaleController extends Controller
{
    public function index($locale) {

        if (! in_array($locale, ['fr', 'en'])) {
            abort(400);
        }
        
        session()->put('locale', $locale);
        return back();

    }
}
