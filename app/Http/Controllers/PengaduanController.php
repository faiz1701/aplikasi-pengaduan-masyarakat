<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pengaduan.index');
    }

    public function store(Request $request)
    {
        $data = Pengaduan::create([
            'user_id' => Auth::id(),
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'judul_pengaduan' => $request->judul_pengaduan,
            'foto_pengaduan' => $request->foto_pengaduan,
            'lokasi_pengaduan' => $request->lokasi_pengaduan,
            'isi_laporan' => $request->isi_laporan,
            'status' => 'request'
        ]);
        if ($request->hasFile('foto_pengaduan')) {
            $request->file('foto_pengaduan')->move('images/', $request->file('foto_pengaduan')->getClientOriginalName());
            $data->foto_pengaduan = $request->file('foto_pengaduan')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('get.history.pengaduan');
    }

    public function historyPengaduan()
    {
        $data = Pengaduan::with('user')->get();
        return view('pengaduan.history', [
            'data' => $data,
        ]);
    }

    public function detailHistory($id)
    {
        $data = Pengaduan::find($id);
        return view('pengaduan.detail-history', [
            'data' => $data,
        ]);
    }
}
