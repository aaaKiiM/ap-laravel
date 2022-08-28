<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\PesanDetail;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pesan(Request $request, $id)
    {
        $produk = Produk::find($id);
        $tanggal = Carbon::now();

        //Cek Jumlah Pesan Jika Melebihi Stock Di Tabel Produk
        if ($request->qty > $produk->stock) {
            return redirect ('/pembeli/show/'.$id);
        }

        //Cek Pesanan Jika Sudah Ada
        $cek_pesan = Pesan::where('users_id',Auth::user()->id)->where('status',0)->first();
        if(empty($cek_pesan)){
            //Simpan Ke Table pesan
            $pesan = New Pesan();
            $pesan->users_id = Auth::user()->id;
            $pesan->penjual_id = $request->toko;
            $pesan->tanggal = $tanggal;
            $pesan->no_faktur = "NF".strval(rand("1000","99999"));
            $pesan->total_harga = 0;
            $pesan->save();
        }

        //Simpan Ke Tabel Pesan Detail
        $pesanbaru = Pesan::where('users_id',Auth::user()->id)->where('status',0)->first();

        //Cek Tabel Pesan Detail Apakah Produknya Sudah Dipesan
        $cek_pesan_d = PesanDetail:: where('produks_id', $produk->id)->where('pesans_id', $pesanbaru->id)->first();
        if (empty($cek_pesan_d)) {
            //Jika Produknya Tidak Sama Maka Akan Disimpan Ke Tabel pesan_detail
            $pesandetail = New PesanDetail();
            $pesandetail->produks_id = $produk->id;
            $pesandetail->pesans_id = $pesanbaru->id;
            $pesandetail->jumlah = $request->qty;
            $pesandetail->total_harga = $produk->harga*$request->qty;
            $pesandetail->save();
        }else {
            $pesandetail = PesanDetail:: where('produks_id', $produk->id)->where('pesans_id', $pesanbaru->id)->first();
            $pesandetail->jumlah = $pesandetail->jumlah+$request->qty;

            $harga_lama = $produk->harga*$request->qty;
            $pesandetail->total_harga = $pesandetail->total_harga+$harga_lama;
            $pesandetail->update();
        }

        //Jumlah Total
        $pesan = Pesan::where('users_id',Auth::user()->id)->where('status',0)->first();
        $pesan->total_harga = $pesan->total_harga+$produk->harga*$request->qty;
        $pesan->update();

        return redirect("/");
    }

    public function checkout()
    {
        $pesan = Pesan::where('users_id',Auth::user()->id)->where('status',0)->first();
        if (!empty($pesan)) {
            $nomor = 1;
            $pesanDetail = PesanDetail::where('pesans_id', $pesan->id)->get();

            return view('page.pembeli.checkout1',compact('pesan','pesanDetail','nomor'));
        }

        return view('page.pembeli.checkout1',compact('pesan'));
    }

    public function konfirmasi()
    {
        $pesan = Pesan::where('users_id',Auth::user()->id)->where('status',0)->first();
        $pesanid = $pesan->id;
        $pesanid1 = $pesan->id;
        $pesan->status = 1;
        $pesan->update();

        $pesandetailid = PesanDetail::where('pesans_id', $pesanid1)->where('status',0)->first();
        $pesandetailid->status = 1;
        $pesandetailid->update();

        //Update Stock Pada Tabel Produk Untuk Mengurangi Jumlah Stock Yang Ada Dengan Stock Yang Sudah Dikonfirmasi
        $pesandetail = PesanDetail::where('pesans_id', $pesanid)->get();
        foreach ($pesandetail as $isi) {
            $produk = Produk::where('id', $isi->produks_id)->first();
            $produk->stock = $produk->stock-$isi->jumlah;
            $produk->update();
        }
        // $pesandetail->status = 1;
        // $pesandetail->save();

        // $pesandetailid = PesanDetail::where('pesans_id', $pesanid1)->where('status',0);
        // $pesandetailid->status = 1;
        // $pesandetailid->update();
        // dd($pesandetailid->id);
        // $pesanstruk = Pesan::where('users_id',Auth::user()->id)->where('status',1)->first();

        return redirect('/struk/'.$pesandetailid->id);
    }

    public function struk($id)
    {
        $nomor = 1;
        $pesandetail = PesanDetail::find($id);
        // $pesan = Pesan::where('id', );
        // $pesandetails = PesanDetail::where('pesans_id', $id)->get();

        return view('page.pembeli.struk',compact('pesandetail','nomor'));
    }

    public function tampilpesan()
    {
        $nomor = 1;
        $pesan = Pesan::where('penjual_id',Auth::user()->id)->get();
        // $pesan = Pesan::all();

        // dd($pesan);
        return view('page.penjual.pesan.index',compact('pesan','nomor'));
    }

    public function diterima($id)
    {
        $pesan = Pesan::find($id);
        $pesan->dibayar = 1;
        $pesan->save();

        return redirect('/admn/pesan');
    }

    public function ditolak($id)
    {
        $pesan = Pesan::find($id);
        $pesan->dibayar = 2;
        $pesan->save();

        return redirect('/admn/pesan');
    }

    public function dikirim($id)
    {
        $pesan = Pesan::find($id);
        $pesan->dikirim = 1;
        $pesan->save();

        return redirect('/penjual/pesan')->withToastSuccess('Status Pengiriman Berhasil Diubaha');
    }


}
