<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function showProfile(): View
    {
        return view('pages.account');
    }

}