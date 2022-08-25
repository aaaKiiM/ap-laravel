<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {
        // $produk = Produk::where('tokos_id', auth()->user()->toko->id);
        // $produk = Produk::all()->where('tokos_id.users_id','=',Auth::user()->id);
        // $produk = auth()->user()->produk ;
        $nomor = 1;
        $produk = Auth::user();
        return view('page.penjual.produk1.index', compact('produk','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        // $produk = Produk::all();
        // dd($produk);
        $kategori = Kategori::all();
        return view('page.penjual.produk1.form',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg|max:2048'
            ]
        );
        $nama_file = $request->foto->getClientOriginalName();
        $upload3 = $request->foto->move('produk', $nama_file);
        $produk = new Produk;

        $produk->users_id = Auth::user()->id;
        // $user=User::where('id','=',Auth::user()->id)->update(['is_penjual'=> 1]);
        $produk->tokos_id = $request->idtoko;
        $produk->kategoris_id = $request->kategori;
        $produk->nama_kue = $request->nmProduk;
        $produk->harga = $request->harga;
        $produk->keterangan = $request->ket;
        $produk->stock = $request->stock;
        $produk->foto = $request->foto->getClientOriginalName();
        $produk->save();

        return redirect('/produks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori = Kategori::all();

        return view('page.penjual.produk1.edit', compact('produk','kategori'));
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
        $produk = Produk::find($id);

        // $produk->tokos_id = $request->idtoko;
        $produk->nama_kue = $request->nmProduk;
        $produk->kategoris_id = $request->kategori;
        $produk->harga = $request->harga;
        $produk->keterangan = $request->ket;
        $produk->stock = $request->stock;
        $produk->save();

        return redirect('/produk');
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
