<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pesan;
use App\Models\PesanDetail;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function post()
    // {
    //     return redirect('/')->withToastSuccess('Task Created Successfully!');
    // }

    public function tampil()
    {
        $produk = Produk::where('is_active', 1)->get();
        // dd($produk);
        $kategori = Kategori::all();
        // Alert::success('Success Title', 'Success Message');
        // Alert::toast('Task Created Successfully!', 'success');
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

    public function bukti(Request $request,$id)
    {
        $validasi = $request->validate(
            [
                'bukti' => 'required|file|mimes:png,jpg,jpeg|max:5048'
            ],
            [
                'bukti.max' => 'Ukuran Bukti Pembayaran Tidak Boleh Lebih Dari 5MB!',
                'bukti.required' => 'Harus Dipilih Foto Sebelum Ubah Profile',
                'bukti.mimes' => 'Fotonya Harus Berformat PNG, JPG, Dan JPEG Ya',
            ]
        );
        $nama_file = $request->bukti->getClientOriginalName();
        $upload3 = $request->bukti->move('bukti', $nama_file);

        $pesan = Pesan::find($id);
        // dd($pesan);
        $pesan->bukti = $request->bukti->getClientOriginalName();
        $pesan->save();

        return redirect('/riwayatpesan')->withToastSuccess('Upload Bukti Berhasil');
    }

    public function profile()
    {
        return view('page.pembeli.profile');
    }

    public function profileupdate(Request $request, $id)
    {
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg|max:5048'
            ],
            [
                'foto.max' => 'Ukuran Foto Tidak Boleh Lebih Dari 5MB!',
                'foto.required' => 'Harus Dipilih Foto Sebelum Ubah Profile',
                'foto.mimes' => 'Fotonya Harus Berformat PNG, JPG, Dan JPEG Ya',
            ]
        );

        $nama_file = $request->foto->getClientOriginalName();
        $upload3 = $request->foto->move('user', $nama_file);
        $user = User::find($id);

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->foto = $request->foto->getClientOriginalName();
        $user->save();

        return redirect('/profile')->withToastSuccess('Ubah Profile Berhasil');
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
