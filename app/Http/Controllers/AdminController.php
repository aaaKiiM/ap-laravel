<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MailController;
use App\Models\Kategori;
use App\Models\Pesan;
use App\Models\Produk;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
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
    public function index()
    {
        $hitungprod = Produk::select("*")->count();
        $hitungtoko = Toko::select("*")->count();
        $hitunguser = User::select("*")->count();
        $hitungkate = Kategori::select("*")->count();
        return view('page.admin.index',compact('hitungprod','hitungtoko','hitunguser','hitungkate'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function toko()
    {
        $nomor = 1;
        $toko = Toko::all();
        return view('page.admin.toko.index',compact('nomor','toko'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk()
    {
        $nomor = 1;
        $produk = Produk::all();
        return view('page.admin.produk.index',compact('nomor','produk'));
    }

    public function user()
    {
        $nomor = 1;
        $user = User::all();
        return view('page.admin.user.index',compact('nomor','user'));
    }

    public function pesan()
    {
        $nomor = 1;
        $pesan = Pesan::all();
        return view('page.admin.pesan.index',compact('nomor','pesan'));
    }

    public function confirmed($id)
    {
        $toko = Toko::find($id);
        // $toko->confirmed = 1;
        // $toko->save();
        $userid = $toko->users_id;


        // dd($userid);
        return redirect('/kirim/'.$userid);
        // return redirect()->route('email', [$userid]);
        // return redirect()->action(
        //     [MailController::class, 'email'], ['id' => $userid]
        // );

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
