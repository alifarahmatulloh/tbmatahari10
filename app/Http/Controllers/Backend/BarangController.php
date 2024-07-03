<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use Carbon\Carbon;

use App\Exports\BarangExport;
use App\Imports\BarangImport;
use Maatwebsite\Excel\Facades\Excel;

class BarangController extends Controller
{
    public function AllBarang()
    {
        $barang = Barang::latest()->get();
        return view('backend.barang.all_barang',compact('barang'));
    } // End Method


    public function AddBarang()
    {
        $kategori = Kategori::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('backend.barang.add_barang',compact('kategori','supplier'));
    } // End Method

    public function StoreBarang(Request $request)
    {       

        $save_url = null;

        if ($request->file('foto_barang')) 
        {
             $manager = new ImageManager(new Driver());
             $name_gen = hexdec(uniqid()).'.'.$request->file('foto_barang')->getClientOriginalExtension();
             $img = $manager->read($request->file('foto_barang'));
             $img = $img->resize(300,300);

             $img->toJpeg(80)->save(base_path('public/upload/barang/'.$name_gen));
             $save_url = 'upload/barang/'.$name_gen;
            
        }

        Barang::insert([

            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'supplier_id' => $request->supplier_id,
            'kode_barang' => $request->kode_barang,
            'stok_barang' => $request->stok_barang,
            'harga_ecer' => $request->harga_ecer,
            'harga_grosir' => $request->harga_grosir,
            'foto_barang' => $save_url,
            'created_at' => Carbon::now(),

            ]);

        $notification = array(
            'message' => 'Data Barang Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('all.barang')->with($notification);
    } // End Method


    public function EditBarang($id)
    {
        $barang = Barang::findOrFail($id);
        $kategori = Kategori::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('backend.barang.edit_barang', compact('barang','kategori','supplier'));

    } // End Method

    public function UpdateBarang(Request $request)
    {
        $barang_id = $request->id;

        if ($request->file('foto_barang')) 
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('foto_barang')->getClientOriginalExtension();
            $img = $manager->read($request->file('foto_barang'));
            $img = $img->resize(300,300);

            $img->toJpeg(80)->save(base_path('public/upload/barang/'.$name_gen));
            $save_url = 'upload/barang/'.$name_gen;

            Barang::findOrFail($barang_id)->update([

            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'supplier_id' => $request->supplier_id,
            'kode_barang' => $request->kode_barang,
            'stok_barang' => $request->stok_barang,
            'harga_ecer' => $request->harga_ecer,
            'harga_grosir' => $request->harga_grosir,
            'foto_barang' => $save_url,
            'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Data Barang Berhasil Diedit',
                'alert-type' => 'success'
            );

            return redirect()->route('all.barang')->with($notification);    
        } else {
            Barang::findOrFail($barang_id)->update([

            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'supplier_id' => $request->supplier_id,
            'kode_barang' => $request->kode_barang,
            'stok_barang' => $request->stok_barang,
            'harga_ecer' => $request->harga_ecer,
            'harga_grosir' => $request->harga_grosir,
            'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Data Barang Berhasil Diedit',
                'alert-type' => 'success'
            );

            return redirect()->route('all.barang')->with($notification); 
        } // end if else condition
    } // End Method


    public function DeleteBarang($id)
    {
        $barang_img = Barang::findOrFail($id);
        $img = $barang_img->foto_barang;
        unlink($img);

        Barang::findOrFail($id)->delete();

        $notification = array(
                'message' => 'Data Barang Berhasil Dihapus',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
    } // End Method


    public function ImportBarang()
    {
        return view ('backend.barang.import_barang');
    } // End Method

    public function Export()
    {
        return Excel::download(new BarangExport,'barang.xlsx');
    } // End Method

    public function Import(Request $request)
    {
        Excel::import(new BarangImport, $request->file('import_file'));

        $notification = array(
                'message' => 'Data Barang Berhasil Diimport',
                'alert-type' => 'success'
            );

            return redirect()->route('all.barang')->with($notification); 
    } // End Method
}
