<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;

class BarangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'nama_barang' => $row[0],
            'kategori_id' => $row[1],
            'supplier_id' => $row[2],
            'kode_barang' => $row[3],
            'stok_barang' => $row[4],
            'harga_ecer' => $row[5],
            'harga_grosir' => $row[6],
        ]);
    }
}
