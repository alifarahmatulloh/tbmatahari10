<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::select('nama_barang','kategori_id','supplier_id','kode_barang','stok_barang','harga_ecer','harga_grosir')->get();
    }
}
