<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    public function products()
    {
        return $this->hasMany(Produk::class, 'tokos_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function tokopesan()
    {
        return $this->hasMany(Pesan::class, 'tokos_id');
    }
}
