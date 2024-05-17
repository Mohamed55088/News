<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function setLocale(Request $request)
    {

        $request->validate([
            '_token' => 'required|csrf',
            'lang' => 'required|string|in:en,ar,he', // Adjust as per your supported languages
        ]);
        dd($request);
        $locale = $request->input('lang');
        if (in_array($locale, config('app.locales'))) {
            $request->session()->put('locale', $locale);
        }

        return response()->json(['success' => true]);
    }
}
