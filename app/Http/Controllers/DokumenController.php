<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\User;
use App\Models\Jenis;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumen = Dokumen::all();
        $user = User::all();
        $jenis = Jenis::all();
        return view('home.dokumen.index', compact('dokumen', 'user', 'jenis'));
    }

    public function detail(string $id)
    {
        $dokumen = Dokumen::find($id);
        $user = User::all();
        $jenis = Jenis::all();
        return view('home.dokumen.detail', compact('dokumen', 'user', 'jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokumen = Dokumen::all();
        $user = User::all();
        $jenis = Jenis::all();
        return view('home.dokumen.tambah', compact('dokumen', 'user', 'jenis'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dokumen = Dokumen::all();
        $user = User::all();
        $jenis = Jenis::all();
        
        $request->validate([
            'nama_nasabah' => 'required|string|max:255',
            'nama_dokumen' => 'required|string|max:255',
            'nomor_dokumen' => 'required|string|max:50|unique:dokumens,nomor_dokumen',
            'deskripsi' => 'required|string|max:1000',
            'id_jenis' => 'required|exists:jenis,id',
            'id_user' => 'required|exists:users,id',
            'file_path' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png|max:10248', // max 10MB
        ]);
        

        $path = $request->file('file_path')->store('dokumen', 'public');

        Dokumen::create([
            'nama_nasabah' => $request->nama_nasabah,
            'nama_dokumen' => $request->nama_dokumen,
            'nomor_dokumen' => $request->nomor_dokumen,
            'deskripsi' => $request->deskripsi,
            'id_jenis' => $request->id_jenis,
            'id_user' => $request->id_user,
            'tgl_upload' => now(),
            'file_path' => $path,
            'verifikasi_dokumen' => 'Belum Lengkap'
        ]);
        return redirect('/dokumen')->with('success', 'Data Dokumen Berhasil Di Tambahkan');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dokumen = Dokumen::find($id);
        $user = User::all();
        $jenis = Jenis::all();
        return view('home.dokumen.edit', compact('dokumen', 'user', 'jenis'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function download($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return response()->download(storage_path('app/public/' . $dokumen->file_path));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokumen = Dokumen::find($id);
        $user = User::find($id);
        $jenis = Jenis::find($id);
        
        $request->validate([
            'nama_nasabah' => 'required|string|max:255',
            'nama_dokumen' => 'required|string|max:255',
            'nomor_dokumen' => 'required|string|max:50|unique:dokumens,nomor_dokumen,' . $dokumen->id,
            'deskripsi' => 'required|string|max:1000',
            'id_jenis' => 'required|exists:jenis,id',
            'id_user' => 'required|exists:users,id',
            'file_path' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png|max:10248', // max 10MB
        ]);
        

        $path = $request->file('file_path')->store('dokumen', 'public');

        $dokumen->update([
            'nama_nasabah' => $request->nama_nasabah,
           'nama_dokumen' => $request->nama_dokumen,
            'nomor_dokumen' => $request->nomor_dokumen,
            'deskripsi' => $request->deskripsi,
            'id_jenis' => $request->id_jenis,
            'id_user' => $request->id_user,
            'tgl_upload' => now(),
            'file_path' => $path,
            'verifikasi_dokumen' => $request->verifikasi_dokumen,
        ]);
        return redirect('/dokumen')->with('success', 'Data Dokumen Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokumen = Dokumen::find($id);
        Storage::delete('public/dokumen/' . $dokumen->file_path);

        $dokumen->delete();
        return redirect()->back()->with('success', 'Data Dokumen Berhasil Dihapus');
    }
}
