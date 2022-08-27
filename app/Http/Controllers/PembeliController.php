<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pesan;
use App\Models\PesanDetail;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampil()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('page.pembeli.index1', compact('produk','kategori'));
    }

    public function kategori($id)
    {
        $kategori = Kategori::find($id);
        // $kategoris = $kategori->id;
        $produk = Produk::where('kategoris_id',$id)->get();
        // dd($produk);
        return view('page.pembeli.kategori', compact('produk','kategori'));
    }

    public function riwayat()
    {
        $nomor = 1;
        $pesandetails = Auth::user();
        // $pesandetail = PesanDetail::where('users_id', Auth::user()->id)->get('jumlah');
        // $pesandetail1 = $pesandetail->id;
        // $pesandetail = PesanDetail::find('users_id', Auth::user()->id);

        $pesan = Auth::user();
        // $pesan = Pesan::where('users_id', Auth::user()->id)->where('status',1)->first();
        $total = Pesan::where('users_id', Auth::user()->id)->where('status',1)->count();
        // dd($pesandetail->pesandetail);
        return view('page.pembeli.riwayatpesan',compact('pesan','nomor','total','pesandetails'));
    }

    // public function detail($id)
    // {
    //     $produk = Produk::find($id);
    //     // $produk1 = Produk::all();


    //     return view('page.pembeli.detail',compact('produk'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function show($id)
    {
        $produk = Produk::find($id);

        return view('page.pembeli.detail1',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
