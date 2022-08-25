<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanDetail extends Model
{
    public function pesan()
    {
        return $this->belongsTo(Pesan::class, 'pesans_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produks_id');
    }
}
