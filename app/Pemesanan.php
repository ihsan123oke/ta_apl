<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['nama','email','no_hp','alamat','ttl','no_ktp','proyek','tipe','status'];
}
