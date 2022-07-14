<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('test');
        }

        return redirect('/login');
    }
}
