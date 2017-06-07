<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelPengaturan extends Model
{
    //
    protected $table    = 'pengaturan';
    protected $fillable = ['nama_situs','alamat-situs','email'];
    protected $visible  = ['nama_situs','alamat-situs','email'];
    public $timestamps  = true;
}
