<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Carbon\Carbon;

class KategoriController extends Controller
{
    public function AllKategori()
    {
        $kategori = Kategori::latest()->get();
        return view('backend.kategori.all_kategori', compact('kategori'));
    } // End Method


    public function StoreKategori(Request $request)
    {
        Kategori::insert([
            'nama_kategori' => $request->nama_kategori,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Kategori Barang Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('all.kategori')->with($notification);
    } // End Method


    public function EditKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('backend.kategori.edit_kategori',compact('kategori'));
    } // End Method

    public function UpdateKategori(Request $request)
    {
        $kategori_id = $request->id;

        Kategori::findOrFail($kategori_id)->update([
            'nama_kategori' => $request->nama_kategori,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Kategori Barang Berhasil Diedit',
            'alert-type' => 'success'
        );

        return redirect()->route('all.kategori')->with($notification);
    } // End Method


    public function DeleteKategori($id)
    {
        Kategori::findOrFail($id)->delete();

        $notification = array(
                'message' => 'Data Kategori Barang Berhasil Hapus',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
    } // End Method
}
