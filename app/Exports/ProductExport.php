<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ar_product = Product::join('penjual', 'penjual.id', '=', 'product.penjual_id')
        ->select('product.nama', 'product.jenis','product.price', 'product.stok', 'product.deskripsi_barang', 'product.penjual_id')
        ->get();
        return $ar_product;
    }
}
