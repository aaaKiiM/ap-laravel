<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function detail($id)
    {
        $produk = Produk::find($id);

        return view('page.pembeli.detail1',compact('produk'));
    }
}
