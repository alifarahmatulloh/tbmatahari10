<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class SupplierController extends Controller
{
    public function AllSupplier()
    {
        $supplier = Supplier::latest()->get();
        return view('backend.supplier.all_supplier', compact('supplier'));
    }


    public function AddSupplier()
    {
        return view('backend.supplier.add_supplier');
    }

    public function StoreSupplier(Request $request)
    {       
        $validateData = $request->validate([
            'nama_toko' => 'required|max:100',
            'jenis_supplier' => 'required',
            'nama' => 'required|max:50',
            'email' => 'required|email|unique:customers|max:30',
            'phone' => 'required|unique:customers|max:12',
            'alamat' => 'required|max:400',
            'kota' => 'required|max:50',
            'bank' => 'required|max:50',
            'nama_rekening' => 'required|max:50',
            'nomor_rekening' => 'required|max:50',
            // 'image' => 'required',
        ],

        [
            // 'age.required' => 'Kolom usia karyawan wajib diisi',
            // 'age.integer' => 'Kolom usia karyawan harus berupa angka',
            // 'age.digits_between' => 'Kolom usia karyawan harus terdiri dari 1 atau 2 digit',
            // 'name.required' => 'Kolom nama wajib diisi',
            // 'email.required' => 'Kolom email wajib diisi',
            // 'email.unique' => 'Email telah digunakan karyawan lain',
            // 'phone.required' => 'Kolom nomor telepon wajib diisi',
            // 'phone.unique' => 'Nomor telepon telah digunakan karyawan lain',
            // 'address.required' => 'Kolom alamat wajib diisi',
            // 'salary.required' => 'Kolom gaji wajib diisi',
            // 'image.required' => 'kolom foto wajib diisi',
        ]);

        // if ($request->file('image')) 
        // {
        //     $manager = new ImageManager(new Driver());
        //     $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
        //     $img = $manager->read($request->file('image'));
        //     $img = $img->resize(300,300);

        //     $img->toJpeg(80)->save(base_path('public/upload/supplier/'.$name_gen));
        //     $save_url = 'upload/supplier/'.$name_gen;

            
        // }

        Supplier::insert([

            'nama_toko' => $request->nama_toko,
            'jenis_supplier' => $request->jenis_supplier,
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'bank' => $request->bank,
            'nama_rekening' => $request->nama_rekening,
            'nomor_rekening' => $request->nomor_rekening,
            // 'image' => $save_url,
            'created_at' => Carbon::now(),

            ]);

        $notification = array(
            'message' => 'Data Supplier Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('all.supplier')->with($notification);

    } // End Method

    public function DetailSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('backend.supplier.detail_supplier', compact('supplier'));
    } // End Method

    public function EditSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('backend.supplier.edit_supplier', compact('supplier'));
    } // End Method

    public function UpdateSupplier(Request $request)
    {
        $supplier_id = $request->id;

        Supplier::findOrFail($supplier_id)->update([

            'nama_toko' => $request->nama_toko,
            'jenis_supplier' => $request->jenis_supplier,
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'bank' => $request->bank,
            'nama_rekening' => $request->nama_rekening,
            'nomor_rekening' => $request->nomor_rekening,
            'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Data Supplier Berhasil Diedit',
                'alert-type' => 'success'
            );

            return redirect()->route('all.supplier')->with($notification);

        // if ($request->file('image')) 
        // {
        //     $manager = new ImageManager(new Driver());
        //     $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
        //     $img = $manager->read($request->file('image'));
        //     $img = $img->resize(300,300);

        //     $img->toJpeg(80)->save(base_path('public/upload/supplier/'.$name_gen));
        //     $save_url = 'upload/supplier/'.$name_gen;

        //     Supplier::findOrFail($supplier_id)->update([

        //     'nama_toko' => $request->nama_toko,
        //     'jenis_supplier' => $request->jenis_supplier,
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'alamat' => $request->alamat,
        //     'kota' => $request->kota,
        //     'bank' => $request->bank,
        //     'nama_rekening' => $request->nama_rekening,
        //     'nomor_rekening' => $request->nomor_rekening,
        //     // 'image' => $save_url,
        //     'created_at' => Carbon::now(),

        //     ]);

        //     $notification = array(
        //         'message' => 'Data Supplier Berhasil Diedit',
        //         'alert-type' => 'success'
        //     );

        //     return redirect()->route('all.supplier')->with($notification);    
        // } else {
        //     Supplier::findOrFail($supplier_id)->update([

        //     'nama_toko' => $request->nama_toko,
        //     'jenis_supplier' => $request->jenis_supplier,
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'alamat' => $request->alamat,
        //     'kota' => $request->kota,
        //     'bank' => $request->bank,
        //     'nama_rekening' => $request->nama_rekening,
        //     'nomor_rekening' => $request->nomor_rekening,
        //     'created_at' => Carbon::now(),

        //     ]);

        //     $notification = array(
        //         'message' => 'Data Supplier Berhasil Diedit',
        //         'alert-type' => 'success'
        //     );

        //     return redirect()->route('all.supplier')->with($notification);
        // }
    } // End Method


    public function DeleteSupplier($id)
    {
        // $supplier_img = Supplier::findOrFail($id);
        // $img = $supplier_img->image;
        // unlink($img);

        Supplier::findOrFail($id)->delete();

        $notification = array(
                'message' => 'Data Supplier Berhasil Hapus',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
    } // End Method
} // End Method
