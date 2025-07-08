<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function show(): View
    {
        return view('pages.homepage');
    }

    public function showContact(): View
    {
        return view('pages.contact');
    }
}
