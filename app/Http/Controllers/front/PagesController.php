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

    public function valyutaSwitcher($unit)
    {
        if (in_array($unit,['AZN','USD','EUR','RUB'])) {
            session()->put('valyuta', $unit);
        }
        else
        {
            session()->put('valyuta', 'AZN');
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

    public function about()
    {
        return view('front.pages.about');
    }

    public function purchase($paket = null)
    {
        if ($paket == null)
        {
            $paket = __('purchase.tarif_paket');
        }
        $pakets = [
            __('purchase.tarif_paket')=>'',
            'basic'=>__('home.basic_'.session('valyuta')),
            'standart'=>__('home.standart_'.session('valyuta')),
            'pro'=>__('home.pro_'.session('valyuta')),
            'trial'=>__('home.trial_'.session('valyuta')),
        ];
        if (!in_array($paket,array_keys($pakets)))
        {
            abort(404);
        }

        return view('front.pages.purchase', compact('paket', 'pakets'));
    }
}
