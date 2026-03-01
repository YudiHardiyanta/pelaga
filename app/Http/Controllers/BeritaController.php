<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;       // ← Tambahkan ini
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admini.blog.data');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('admini.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        // ✅ VALIDASI
        $request->validate([
            'jenis' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255', 'min:3'],
            'uraian' => ['required', 'string', 'max:500', 'min:3'],
            'foto' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        // ✅ SIMPAN FOTO
        $namaFile = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            // Nama file unik
            $namaFile = time() . '_' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();

            // Simpan di storage/app/public/berita
            $file->storeAs('public/berita', $namaFile);
        }

        // ✅ SIMPAN KE DATABASE
        Berita::create([
            'user_id' => Auth::user()->id,
            'berita_title' => $request->title,
            'berita_content' => $request->uraian,
            'berita_foto' => $namaFile,
            'status' => 1,
        ]);

        // ✅ REDIRECT DENGAN PESAN SUKSES
        return redirect()->back()->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
