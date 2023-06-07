<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Pesanan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomePenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Dashboard";
        $total_makanan =  DetailTransaksi::join('product', 'detail_transaksi.product_id', '=', 'product.id')
            ->join('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->where('product.penjual_id', Auth::user()->penjual->id)
            ->where('transaksi.tanggal', date('Y-m-d'))
            ->where('product.jenis', 'Makanan')
            ->where('transaksi.status', 'Diproses')->count();
        $total_minuman =  DetailTransaksi::join('product', 'detail_transaksi.product_id', '=', 'product.id')
            ->join('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->where('product.penjual_id', Auth::user()->penjual->id)
            ->where('transaksi.tanggal', date('Y-m-d'))
            ->where('product.jenis', 'Minuman')
            ->where('transaksi.status', 'Diproses')->count();
        $total_penjualan =  Transaksi::with('detail_transaksi.product')
            ->whereHas('detail_transaksi.product', function ($query) {
                $query->where('penjual_id', Auth::user()->penjual->id);
            })
            ->where('tanggal', date('Y-m-d'))
            ->sum('transaksi.total');
        $penjualan_makanan =  DetailTransaksi::select(DB::raw('COUNT(product.id) as makanan , MONTH(transaksi.tanggal) as bulan'))
            ->join('product', 'detail_transaksi.product_id', '=', 'product.id')
            ->join('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->where('product.penjual_id', Auth::user()->penjual->id)
            ->where('product.jenis', 'Makanan')
            ->whereYear('transaksi.tanggal', date('Y'))
            ->groupBy('bulan')
            ->orderBy('transaksi.tanggal', 'desc')
            ->get();
        $penjualan_minuman =  DetailTransaksi::select(DB::raw('COUNT(product.id) as minuman , MONTH(transaksi.tanggal) as bulan'))
            ->join('product', 'detail_transaksi.product_id', '=', 'product.id')
            ->join('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->where('product.penjual_id', Auth::user()->penjual->id)
            ->where('product.jenis', 'Minuman')
            ->whereYear('transaksi.tanggal', date('Y'))
            ->groupBy('bulan')
            ->orderBy('transaksi.tanggal', 'desc')
            ->get();
        return view('pages-penjual.dashboard', compact('title', 'total_makanan', 'total_minuman', 'total_penjualan', 'penjualan_makanan', 'penjualan_minuman'));
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
