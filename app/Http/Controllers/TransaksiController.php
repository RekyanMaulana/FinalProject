<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Manajemen Transaksi';
        $diproses = Transaksi::with('detail_transaksi.product')
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('profile', 'users.id', '=', 'profile.user_id')
            ->whereHas('detail_transaksi.product', function ($query) {
                $query->where('penjual_id', Auth::user()->penjual->id);
            })
            ->where('transaksi.status', 'Diproses')
            ->orderBy('transaksi.created_at', 'desc')
            ->get();
        $dikirim = Transaksi::with('detail_transaksi.product')
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('profile', 'users.id', '=', 'profile.user_id')
            ->whereHas('detail_transaksi.product', function ($query) {
                $query->where('penjual_id', Auth::user()->penjual->id);
            })
            ->where('transaksi.status', 'Dikirim')
            ->orderBy('transaksi.created_at', 'desc')
            ->get();
        $diterima = Transaksi::with('detail_transaksi.product')
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('profile', 'users.id', '=', 'profile.user_id')
            ->whereHas('detail_transaksi.product', function ($query) {
                $query->where('penjual_id', Auth::user()->penjual->id);
            })
            ->where('transaksi.status', 'Diterima')
            ->orderBy('transaksi.created_at', 'desc')
            ->get();
        return view('pages-penjual.transaksi.index', compact('title', 'diproses', 'dikirim', 'diterima'));
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
