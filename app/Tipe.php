<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $primaryKey = 'tipe_id';
    protected $table = 'tipe';
    protected $fillable = ['file','proyek_id','nama_tipe','deskripsi_tipe','lantai','kamar','kamar_mandi','ruang_keluarga','dapur','garasi','gudang','harga'];
}
