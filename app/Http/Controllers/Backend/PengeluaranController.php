<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class PengeluaranController extends Controller
{
    public function AddPengeluaran()
    {
        return view('backend.pengeluaran.add_pengeluaran');
    } // End Method

    public function StorePengeluaran(Request $request)
    {
        Pengeluaran::insert([

            'nama_pengeluaran' => $request->nama_pengeluaran,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Data Pengeluaran Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method


    public function TodayPengeluaran()
    {
        $date = date("d-m-Y");
        $today = Pengeluaran::where('tanggal',$date)->get();
        return view('backend.pengeluaran.today_pengeluaran',compact('today'));
    } // End Method

    public function MonthPengeluaran()
    {
        $bulan = date("F");
        $month = Pengeluaran::where('bulan',$bulan)->get();
        return view('backend.pengeluaran.month_pengeluaran',compact('month'));
    } // End Method

    public function YearPengeluaran()
    {
        $tahun = date("Y");
        $year = Pengeluaran::where('tahun',$tahun)->get();
        return view('backend.pengeluaran.year_pengeluaran',compact('year'));
    } // End Method


    public function EditPengeluaran($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('backend.pengeluaran.edit_pengeluaran',compact('pengeluaran'));
    } // End Method

    public function UpdatePengeluaran(Request $request)
    {
        $pengeluaran_id = $request->id;


        Pengeluaran::findOrFail($pengeluaran_id)->update([

            'nama_pengeluaran' => $request->nama_pengeluaran,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Data Pengeluaran Berhasil Diedit',
            'alert-type' => 'success'
        );

        return redirect()->route('today.pengeluaran')->with($notification);
    } // End Method
}
