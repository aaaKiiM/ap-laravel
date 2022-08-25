<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    public function pesan()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function pesandetail()
    {
        return $this->hasMany(PesanDetail::class, 'pesans_id');
    }

    public function tokopesan()
    {
        return $this->belongsTo(Toko::class, 'tokos_id');
    }
}
