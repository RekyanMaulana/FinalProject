<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KatalogProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Produk";
        $produk =  Product::with(['product_galleries'])
            ->leftJoin('product_galleries', 'product.id', '=', 'product_galleries.product_id')
            ->leftJoin('detail_transaksi', 'product.id', '=', 'detail_transaksi.product_id')
            ->leftJoin('rating', 'detail_transaksi.id', '=', 'rating.detail_transaksi_id')
            ->select('product.*', DB::raw('AVG(rating.rating) as nilai'))
            ->orderBy('nilai', 'DESC')
            ->groupBy('product.id', 'product.nama', 'product.jenis', 'product.price', 'product.stok', 'product.deskripsi_barang', 'product.penjual_id', 'product.created_at', 'product.updated_at')
            ->take(8)
            ->get();
        $total_makanan =  Product::where('jenis', 'Makanan')->count();
        $total_minuman =  Product::where('jenis', 'Minuman')->count();
        $penjual = Penjual::withCount('product')
            ->orderByDesc('created_at')
            ->get();
        return view('pages-user.produk', compact('title', 'produk', 'total_makanan', 'total_minuman', 'penjual'));
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
