<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    protected $fillable = ['file', 'nama_marketing', 'email_marketing', 'jabatan', 'notlp_marketing'];
}
