<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // use HasFactory;

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'tokos_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function pesandetail()
    {
        return $this->hasMany(Pesan::class, 'produks_id');
    }
}
