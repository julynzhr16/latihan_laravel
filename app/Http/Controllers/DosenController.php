<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.dosen', compact('data'));
    }

    public function store(Request $request)
    {
        Dosen::create($request->only('nama', 'nid'));
        return redirect()->back();
    }
}
