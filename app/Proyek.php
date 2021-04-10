<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $primaryKey = 'proyek_id';
    protected $fillable = ['file','nama_proyek','alamat_proyek','deskripsi_proyek'];
}
