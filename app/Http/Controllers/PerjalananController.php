<?php

namespace App\Http\Controllers;


use App\Models\Perjalanan;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    public function index()
    {
        return view('pages.input');
    }

    public function simpanPerjalanan(Request $request)
    {
        $data = [
            'id_user' => auth()->user()->id,
            'lokasi' => $request->lokasi,
            'jam' => $request->jam,
            'suhu' => $request->suhu,
            'tanggal' => $request->tanggal
        ];

        // dd($data);
        perjalanan::create($data);

        return redirect('/dashboard')->with('message', 'Penyimpanan Berhasil');
    }
}
