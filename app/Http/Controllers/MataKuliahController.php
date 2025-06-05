<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        // akses model Fakultas
        $mata_kuliah = Mata_Kuliah::all();  // select * from fakultas
        // dd($fakultas);
        return view('matakuliah.index', compact('mata_kuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input form
        $input = $request->validate([
            'kode_mk' => 'required',
            'nama' => 'required',
            'prodi_id' => 'required',
        ]);

        // simpan ke tabel fakultas
        Mata_Kuliah::create($input);

        // redirect ke route matakuliah.index
        return redirect()->route('matakuliah.index')
                         ->with('success', 'Mata Kuliah berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mata_Kuliah $mata_kuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mata_Kuliah $mata_kuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mata_Kuliah $mata_kuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mata_Kuliah $mata_kuliah)
    {
        //
    }
}
