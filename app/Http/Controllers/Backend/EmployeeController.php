<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function AllEmployee()
    {
        $employee = Employee::latest()->get();
        return view('backend.employee.all_employee', compact('employee'));
    } // End Method


    public function AddEmployee()
    {
        return view('backend.employee.add_employee');
    } // End Method

    public function StoreEmployee(Request $request)
    {       
        $validateData = $request->validate([
            'name' => 'required|max:200',
            // 'age' => 'required|integer|digits_between:1,2',
            'email' => 'required|email|unique:employees|max:200',
            'phone' => 'required|unique:employees|max:12',
            'address' => 'required|max:400',
            'salary' => 'required|max:200',
            'image' => 'required',
        ],
        [
            // 'age.required' => 'Kolom usia karyawan wajib diisi',
            // 'age.integer' => 'Kolom usia karyawan harus berupa angka',
            // 'age.digits_between' => 'Kolom usia karyawan harus terdiri dari 1 atau 2 digit',
            'name.required' => 'Kolom nama wajib diisi',
            'email.required' => 'Kolom email wajib diisi',
            'email.unique' => 'Email telah digunakan karyawan lain',
            'phone.required' => 'Kolom nomor telepon wajib diisi',
            'phone.unique' => 'Nomor telepon telah digunakan karyawan lain',
            'address.required' => 'Kolom alamat wajib diisi',
            'salary.required' => 'Kolom gaji wajib diisi',
            'image.required' => 'kolom foto wajib diisi',
        ]);

        if ($request->file('image')) 
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(300,300);

            $img->toJpeg(80)->save(base_path('public/upload/employee/'.$name_gen));
            $save_url = 'upload/employee/'.$name_gen;

            Employee::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'salary' => $request->salary,
            'image' => $save_url,
            'created_at' => Carbon::now(),

            ]);
        }

        $notification = array(
            'message' => 'Data Karyawan Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification);

    } // End Method


    public function EditEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        return view('backend.employee.edit_employee', compact('employee'));
    } // End Method

    public function UpdateEmployee(Request $request)
    {
        $employee_id = $request->id;

        if ($request->file('image')) 
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(300,300);

            $img->toJpeg(80)->save(base_path('public/upload/employee/'.$name_gen));
            $save_url = 'upload/employee/'.$name_gen;

            Employee::findOrFail($employee_id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'salary' => $request->salary,
            'image' => $save_url,
            'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Data Karyawan Berhasil Diedit',
                'alert-type' => 'success'
            );

            return redirect()->route('all.employee')->with($notification);    
        } else {
            Employee::findOrFail($employee_id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'salary' => $request->salary,
            'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Data Karyawan Berhasil Diedit',
                'alert-type' => 'success'
            );

            return redirect()->route('all.employee')->with($notification);
        } // end if else condition
    } // End Method


    public function DeleteEmployee($id)
    {
        $employee_img = Employee::findOrFail($id);
        $img = $employee_img->image;
        unlink($img);

        Employee::findOrFail($id)->delete();

        $notification = array(
                'message' => 'Data Karyawan Berhasil Hapus',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
    } // End Method
}
