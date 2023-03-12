<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function getPengaduan()
    {
        $data = Pengaduan::all();
        return view('admin.pengaduan', [
            'data' => $data,
        ]);
    }

    public function detailPengaduan($id)
    {
        $data = Pengaduan::find($id);
        return view('admin.detail-pengaduan', [
            'data' => $data,
        ]);
    }

    public function tanggapan(){

    }
}
