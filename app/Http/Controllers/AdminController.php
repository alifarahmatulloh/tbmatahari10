<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Admindestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Admin Berhasil Keluar',
            'alert-type' => 'info'
        );

        return redirect('/logout')->with($notification);
    } // End Method


    public function AdminLogoutPage()
    {
        return view('admin.admin_logout');
    } // End Method


    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    } //End Method


    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('photo')) 
        {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profil Admin Berhasil Diperbaharui',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Method


    public function ChangePassword()
    {
        return view ('admin.change_password');
    } // End Method


    public function UpdatePassword(Request $request)
    {
        /// Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);

        /// Does Match the old Password
        if(!Hash::check($request->old_password, auth::user()->password))
        {
            $notification = array(
            'message' => 'Kata Sandi Lama Anda Salah!',
            'alert-type' => 'error'
        );
            return back()->with($notification);
        }

        /// Update The New Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)    
        ]);

        $notification = array(
            'message' => 'Kata Sandi berhasil dirubah',
            'alert-type' => 'success'
        );

            return back()->with($notification);
    } // End Method
}
