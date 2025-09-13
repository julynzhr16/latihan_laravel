<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    public function index()
    {
        $data = Ruangan::all();
        return view('ruangan.index', compact('data'));
    }

    public function store(Request $request)
    {
        Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'kapasitas' => $request->kapasitas,
        ]);

        return redirect('/ruangan');
    }
}
