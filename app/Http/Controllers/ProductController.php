<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Produk";
        $data = Product::where('penjual_id', Auth::user()->penjual->id)->orderBy('created_at', 'desc')->get();
        return view('pages-penjual.produk.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Data Produk';
        return view('pages-penjual.produk.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $id = mt_rand(1000, 99999);
        $data = Product::create([
            'id' => $id,
            'nama' => $request->nama,
            'jenis' =>  $request->jenis,
            'price' => $request->price,
            'stok' => $request->stok,
            'deskripsi_barang' => $request->deskripsi_barang,
            'penjual_id' => Auth::user()->penjual->id
        ]);

        if ($request->hasFile('foto')) {
            $example = $request->file('foto');
            foreach ($example as $fileExample) {
                $extension = $fileExample->getClientOriginalExtension();
                $rand = Str::random(5);
                $rand1 = Str::random(3);
                $fileExampleName = $rand . "-" . date('Ymd-his') . "-" . $rand1 . "." . $extension;
                $destinationPath = 'assets/produk' . '/';
                $fileExample->move($destinationPath, $fileExampleName);

                Product_Galleries::create([
                    'product_id' =>  $id,
                    'foto' =>  $fileExampleName,
                ]);
            }
        }

        if ($data) {
            return redirect('produk')->with('success', 'Data Produk Berhasil Di Tambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Data Produk';
        $data = Product::find($id);
        $product_gallery = Product_Galleries::where('product_id', $id)->orderBy('created_at', 'desc')->get();
        return view('pages-penjual.produk.update', compact('title', 'data', 'product_gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = Product::find($id);
        $data->nama = $request->nama;
        $data->jenis = $request->jenis;
        $data->price = $request->price;
        $data->stok =  $data->stok + $request->tambah_stok - $request->kurang_stok;
        $data->deskripsi_barang = $request->deskripsi_barang;

        if ($request->hasFile('foto')) {
            $example = $request->file('foto');
            foreach ($example as $fileExample) {
                $extension = $fileExample->getClientOriginalExtension();
                $rand = Str::random(5);
                $rand1 = Str::random(3);
                $fileExampleName = $rand . "-" . date('Ymd-his') . "-" . $rand1 . "." . $extension;
                $destinationPath = 'assets/produk' . '/';
                $fileExample->move($destinationPath, $fileExampleName);

                Product_Galleries::create([
                    'product_id' =>  $id,
                    'foto' =>  $fileExampleName,
                ]);
            }
        }
        $data->update();

        if ($data) {
            return redirect('produk')->with('success', 'Data Produk Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::find($id);
        $galleries = Product_Galleries::where('product_id', $id)->get();
        foreach ($galleries as $gallery) {
            $location = 'assets/produk/' . $gallery->foto;
            if (File::exists($location)) {
                File::delete($location);
            }
        }
        $data->delete();

        if ($data) {
            return redirect('produk')->with('success', 'Data Produk Berhasil Dihapus');
        }
    }

    public function detail_produk(string $id)
    {
        $title = "Detail Produk";
        return view('pages-user.shop', compact('title'));
    }

    public function katalog_produk()
    {
        $title = "Produk";
        return view('pages-user.produk', compact('title'));
    }

    public function hapus_gallery($id)
    {
        $id = explode('-', $id);
        $data = Product_Galleries::find($id[0]);
        $location_example = 'assets/produk/' . $data->foto;
        if (File::exists($location_example)) {
            File::delete($location_example);
        }
        $data->delete();
        return redirect()->route('produk-edit', $id[1]);
    }
}
