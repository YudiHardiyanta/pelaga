<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('useri.kontak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'telepon' => ['required', 'string', 'max:13', 'min:9'],
            'alamat' => ['required', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'uraian' => ['required', 'string', 'max:255'],
        ]);

        

        // ✅ SIMPAN KE DATABASE
        Pengaduan::create([
        'pengaduan_nama' => $request->nama,
        'pengaduan_email' => $request->email,
        'pengaduan_telepon' => $request->telepon,
        'pengaduan_alamat' => $request->alamat, // diperbaiki
        'pengaduan_subjek' => $request->subject,
        'pengaduan_uraian' => $request->uraian,

        ]);

        // ✅ REDIRECT DENGAN PESAN SUKSES
        return redirect()->back()->with('success', 'Pengaduan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
