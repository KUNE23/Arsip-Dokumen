<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jenis;
use App\Models\Dokumen;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::count();
        $jenis = Jenis::count();
        $dokumen = Dokumen::all();
        $dokblmlengkap = Dokumen::where('verifikasi_dokumen', 'Belum Lengkap')->count();
        $doksdhlengkap = Dokumen::where('verifikasi_dokumen', 'Sudah Lengkap')->count();
        return view('home.dashboard', compact('user', 'jenis', 'dokblmlengkap', 'doksdhlengkap', 'dokumen'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
