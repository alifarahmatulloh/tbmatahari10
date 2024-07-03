<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function AllCustomer()
    {
        $customer = Customer::latest()->get();
        return view('backend.customer.all_customer', compact('customer'));
    } // End Method


    public function AddCustomer()
    {
        return view('backend.customer.add_customer');
    } // End Method

    public function StoreCustomer(Request $request)
    {       
        $validateData = $request->validate([
            'nama' => 'required|max:50',
            'nama_toko' => 'required|max:100',
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

        //     $img->toJpeg(80)->save(base_path('public/upload/customer/'.$name_gen));
        //     $save_url = 'upload/customer/'.$name_gen;

            
        // }

        Customer::insert([

            'nama' => $request->nama,
            'nama_toko' => $request->nama_toko,
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
            'message' => 'Data Customer Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('all.customer')->with($notification);

    } // End Method


public function DetailCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        return view('backend.customer.detail_customer', compact('customer'));
    } // End Method


    public function EditCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        return view('backend.customer.edit_customer', compact('customer'));
    } // End Method

    public function UpdateCustomer(Request $request)
    {
        $customer_id = $request->id;

        if ($request->file('image')) 
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(300,300);

            $img->toJpeg(80)->save(base_path('public/upload/customer/'.$name_gen));
            $save_url = 'upload/customer/'.$name_gen;

            Customer::findOrFail($customer_id)->update([

            'nama' => $request->nama,
            'nama_toko' => $request->nama_toko,
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
                'message' => 'Data Customer Berhasil Diedit',
                'alert-type' => 'success'
            );

            return redirect()->route('all.customer')->with($notification);    
        } else {
            Customer::findOrFail($customer_id)->update([

            'nama' => $request->nama,
            'nama_toko' => $request->nama_toko,
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
                'message' => 'Data Customer Berhasil Diedit',
                'alert-type' => 'success'
            );

            return redirect()->route('all.customer')->with($notification);
        } // end if else condition
    } // End Method


    public function DeleteCustomer($id)
    {
        // $customer_img = Customer::findOrFail($id);
        // $img = $customer_img->image;
        // unlink($img);

        Customer::findOrFail($id)->delete();

        $notification = array(
                'message' => 'Data Customer Berhasil Hapus',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
    } // End Method
}
