<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("mahasiswa.index")->with("mahasiswa", $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "npm"=> "required|unique:mahasiswa",
            "nama"=> "required",
            "tmpt_lahir"=> "required",
            "tgl_lahir"=> "required",
            "foto"=> "required",
            "prodi_id"=> "required|image",
        ]);   
        // ambil extensi file foto
        $ext = $request->foto->getClientOriginalExtension();
        // rename file foto menjadi npm.extensi (contoh : 2226250098.jpg
        $validasi["foto"] = $request->npm.".".$ext; 
        //upload file foto
        $request->foto->move(public_path('foto'), $validasi["foto"]);
        //simpan table mahasiswa
        Mahasiswa::create($validasi);
        return redirect("mahasiswa")->with("success","Data mahasiswa berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
