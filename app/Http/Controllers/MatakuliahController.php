<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::all();
        return view('mata_kuliah.mata_kuliah', compact('data'));
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->only('nama_matkul', 'deskripsi'));
        return redirect()->back();
    }
}