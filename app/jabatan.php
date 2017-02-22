<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    //
    protected $table = 'jabatans';
    protected $fillable = ['id','kode_jabatan','nama_jabatan','besaran_uang'];
    public $timestamps = true;
}
