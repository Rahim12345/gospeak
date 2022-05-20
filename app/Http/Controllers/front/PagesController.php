<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function langSwitcher($locale)
    {
        if (in_array($locale,['az','en','ru'])) {
            session()->put('locale', $locale);
        }
        else
        {
            session()->put('locale', 'az');
        }

        return redirect()->back();
    }

    public function index()
    {
        return view('front.pages.home');
    }

    public function aboutCourse()
    {
        return view('front.pages.about-cource');
    }
}
