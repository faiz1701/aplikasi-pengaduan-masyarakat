<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
        // if (Auth::user()->level == 'masyarakat') {
        //     return redirect()->route('home');
        // }

        // if (Auth::user()->level == 'petugas') {
        //     return redirect()->route('dashboard');
        // }
        // dashboard
    }

    public function admin(){
        return view('dashboard');
    }
}
