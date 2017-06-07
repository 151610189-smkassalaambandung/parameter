<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelPengguna extends Model
{
    //
    protected $table    = 'pengguna';
    protected $fillable = ['nama_lengkap','alamat','no_hp'];
    protected $visible  = ['nama_lengkap','alamat','no_hp'];
    public $timestamps  = true;
}
