<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penjual = DB::table('penjual')->get();
        return view('admin.penjual.index', compact('penjual'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //arahkan ke file create
        return view('admin.penjual.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_toko' => 'required',
            'deskripsi_toko' => 'nullable',
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nama_toko.required' => 'Nama toko wajib diisi',
        ]);
        //
        DB::table('penjual')->insert([
            'nama' =>$request->nama,
            'nama_toko' =>$request->nama_toko,
            'deskripsi_toko' =>$request->deskripsi_toko,
        ]);
        Alert::success('Penjual', 'Berhasil Menambahkan Penjual');
        return redirect('admin/penjual');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $penjual = DB::table('penjual')->where('id', $id)->get();
        
        return view('admin.penjual.detail', compact('penjual'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $penjual = DB::table('penjual')->where('id', $id)->get();

        return view('admin.penjual.edit', compact('penjual'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_toko' => 'required',
            'deskripsi_toko' => 'nullable',
        ]);
        //
        DB::table('penjual')->where('id', $request->id)->update([
            'nama' =>$request->nama,
            'nama_toko' =>$request->nama_toko,
            'deskripsi_toko' =>$request->deskripsi_toko,
        ]);
        Alert::info('Penjual', 'Berhasil Mengedit Penjual');

        return redirect('admin/penjual');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
