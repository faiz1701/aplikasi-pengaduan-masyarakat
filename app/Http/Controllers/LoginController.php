<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function loginView(){
        return view('Auth.Login.login');
    }

    public function home(){
        return view('home');
    }

    public function dahsboard(){
        return view('dashboard');
    }


    public function postLogin(Request $request){
        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))){
            $user = auth()->user();
            $request->session()->regenerate();
            if ($user->level == 'admin' || $user->level == 'petugas') {
                return redirect()->intended('/dashboard')->with('login', 'Login Success !!');
            } elseif ($user->level == 'masyarakat') {
                return redirect()->intended('/home')->with('login', 'Login Success !!');
            }
        }
        return redirect('/');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    public function registerView(){
        return view('Auth.Register.register');
    }

    public function postRegister(Request $request){
        User::create([
            'name' => $request->name,
            'level' => 'admin',
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/');
    }
}
