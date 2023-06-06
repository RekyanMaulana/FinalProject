<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;
use App\Models\Product;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //arahkan ke view
        $product = Product::join('penjual', 'product.penjual_id', '=', 'penjual.id')
        ->select('product.*', 'penjual.nama_toko as nama_toko')
        ->get();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //arahkan ke file create
        $penjual = DB::table('penjual')->get();
        $product = Product::join('penjual', 'product.penjual_id', '=', 'penjual.id')
        ->select('product.*', 'penjual.nama as penjual')
        ->get();
        return view('admin.product.create', compact('product', 'penjual'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'price' => 'required',
            'stok' => 'required',
            'penjual_id' => 'required|integer',
        ],
        [
            'nama.required' => 'Nama product wajib diisi',
            'jenis.required' => 'Jenis product wajib diisi',
            'price.required' => 'Harga product wajib diisi',
            'stok.required' => 'Stok product wajib diisi',
            'penjual_id.required' => 'Nama toko wajib diisi',
        ]);
        //
        DB::table('product')->insert([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'price' => $request->price,
            'stok' => $request->stok,
            'penjual_id' => $request->penjual_id,
        ]);
        Alert::success('Produk', 'Berhasil Menambahkan Produk');
        return redirect('admin/product');
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
        $penjual = DB::table('penjual')->get();
        $product = DB::table('product')->where('id', $id)->get();
        $ar_jenis = ['Makanan', 'Minuman'];

        return view('admin.product.edit', compact('product', 'penjual', 'ar_jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'price' => 'required',
            'stok' => 'required',
            'penjual_id' => 'required|integer',
        ]);
        //
        DB::table('product')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'price' => $request->price,
            'stok' => $request->stok,
            'penjual_id' => $request->penjual_id,
        ]);
        Alert::info('Produk', 'Berhasil Mengedit Produk');
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
