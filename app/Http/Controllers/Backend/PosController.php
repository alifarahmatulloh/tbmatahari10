<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\Customer;
use Gloudemans\Shoppingcart\Facades\Cart;

class PosController extends Controller
{
    public function PosUmum()
    {
        $barang = Barang::latest()->get();
        return view('backend.pos.pos_page',compact('barang'));
    } // End Method


    public function AddCart(Request $request)
    {
        Cart::add([
            'id' => $request->id, 
            'qty' => $request->jumlah_barang, 
            'name' => $request->nama_barang, 
            'price' => $request->harga_ecer, 
            'weight' => 550, 
            'options' => ['size' => 'large']]);

        $notification = array(
            'message' => 'Barang berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method

    public function AllItem()
    {
        $barang_item = Cart::content();
        return view('backend.pos.text_item',compact('barang_item'));
    } // End Method


    public function UpdateCart(Request $request,$rowId)
    {
        $qty = $request->qty;
        $update = Cart::update($rowId,$qty);

        $notification = array(
            'message' => 'Jumlah barang berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method


    public function RemoveCart($rowId)
    {
        Cart::remove($rowId);

        $notification = array(
            'message' => 'Barang berhasil Dihapus',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method


    public function CreateInvoice(Request $request)
    {
        $contents = Cart::content();
        return view('backend.invoice.pos_invoice',compact('contents'));
    } // End Method



    public function ApplyDiscount(Request $request)
    {
        $discount = $request->input('diskon');
        session()->put('diskon', $discount);
        return response()->json(['success' => true]);
    }

    public function ApplyShipping(Request $request)
    {
        $shippingCost = $request->input('ongkos_kirim');
        session()->put('ongkos_kirim', $shippingCost);
        return response()->json(['success' => true]);
    }
}
