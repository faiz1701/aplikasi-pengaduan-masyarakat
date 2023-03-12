<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('petugas.index', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => 'petugas',
            'nik' => $request->nik,
            'no_telp' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('get.petugas');
    }
}
