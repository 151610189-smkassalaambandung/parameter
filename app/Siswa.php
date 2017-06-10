<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillable = ['nama','alamat','jenis_kelamin'];
    protected $visible  = ['nama','alamat','jenis_kelamin'];
    public $timestamps  = true;
}
