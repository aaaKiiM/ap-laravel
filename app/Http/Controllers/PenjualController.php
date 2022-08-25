<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Toko;
use App\Models\User;
use App\Models\Produk;


class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tampil()
    {
        $hitungproduk = Produk::select("*")->where("users_id",Auth::user()->id)->count();
        $hitungpesan = Pesan::select("*")->where("penjual_id",Auth::user()->id)->count();
        return view('page.penjual.index',compact('hitungproduk','hitungpesan'));
    }

    public function verifikasi()
    {
        // $verifikasi = Auth::user();
        return view('page.penjual.verifikasi');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function form(){
        return view('page.penjual.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $toko = new Toko;

        $toko->users_id = Auth::user()->id;
        $toko->nama_toko = $request->namatoko;
        $toko->alamat_toko = $request->alamattoko;
        $toko->no_hp_toko = $request->nohptoko;
        // $toko->token = strval(rand("1000","99999"));
        $toko->save();
        $user=User::where('id','=',Auth::user()->id)->update(['is_penjual'=> 1]);
        $user1=User::where('id','=',Auth::user()->id)->update(['token'=> strval(rand("1000","99999"))]);

        return redirect('/penjual');
    }

    public function validasi(Request $request, $id)
    {
        // dd($id);
        if (Auth::user()->token == $request->token) {
            // $user = User::find($id);
            $toko = Toko::where('users_id', $id)->update(['confirmed'=>1]);
            return redirect('/penjual');
        }else{
            return redirect('/penjual/verifikasi');
        }
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
