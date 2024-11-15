<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data jenis dari database
        $jenis = Jenis::all();

        // Mengembalikan view dengan data jenis
        return view('jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk membuat data jenis baru
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input data jenis
        $request->validate([
            'nama_jenis' => 'required|string|max:255',
            'kode_jenis' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:500',
        ]);

        // Menyimpan data jenis baru ke dalam database
        Jenis::create([
            'nama_jenis' => $request->nama_jenis,
            'kode_jenis' => $request->kode_jenis,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('jenis.index')->with('success', 'Jenis berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        // Menampilkan data jenis tertentu (opsional, jika perlu)
        return view('jenis.show', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        // Menampilkan form untuk mengedit data jenis
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenis $jenis)
    {
        // Validasi input data jenis
        $request->validate([
            'nama_jenis' => 'required|string|max:255',
            'kode_jenis' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:500',
        ]);

        // Memperbarui data jenis
        $jenis->update([
            'nama_jenis' => $request->nama_jenis,
            'kode_jenis' => $request->kode_jenis,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('jenis.index')->with('success', 'Jenis berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis)
    {
        // Menghapus data jenis dari database
        $jenis->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('jenis.index')->with('success', 'Jenis berhasil dihapus');
    }
}