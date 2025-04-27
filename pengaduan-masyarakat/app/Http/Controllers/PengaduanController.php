<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduans = Pengaduan::paginate(6);
        return view('pengaduan.index', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'judul_pengaduan' => 'required',
            'isi_pengaduan' => 'required',
            'kategori' => 'required',
            'tanggal_pengaduan' => 'required|date',
        ]);

        Pengaduan::create($request->all());

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dibuat.');
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
        return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'judul_pengaduan' => 'required',
            'isi_pengaduan' => 'required',
            'kategori' => 'required',
            'tanggal_pengaduan' => 'required|date',
        ]);

        $pengaduan->update($request->all());

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }

    public function deleted()
    {
        $pengaduans = Pengaduan::onlyTrashed()->paginate(6);
        return view('pengaduan.deleted', compact('pengaduans'));
    }

    public function restore($id)
{
    $pengaduan = Pengaduan::onlyTrashed()->findOrFail($id);
    $pengaduan->restore();

    return redirect()->route('pengaduan.terhapus')->with('success', 'Pengaduan berhasil direstore.');
}
public function terhapus()
{
    $pengaduans = Pengaduan::onlyTrashed()->paginate(10);
    return view('pengaduan.terhapus', compact('pengaduans'));
}


}
