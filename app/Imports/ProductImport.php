<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'nama' => $row[0],
            'jenis' => $row[1],
            'price' => $row[2],
            'stok' => $row[3],
            'penjual_id' => $row[4],
        ]);
    }
}
