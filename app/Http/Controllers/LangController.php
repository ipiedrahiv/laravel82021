<?php

// Santiago Santacruz

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function setting(Request $request, $locale)
    {
        session(['APP_LOCALE'=>$locale]);

        return redirect()->back();
    }
}
