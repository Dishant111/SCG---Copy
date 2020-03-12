<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function loginPage(Request $request)
    {
        return view('page.login');
    }
}
