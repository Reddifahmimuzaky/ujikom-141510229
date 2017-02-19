<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    //
    protected $table = 'jabatans';
    protected $fillable = ['id','kode_jabatan','nama_jabatan','besaran_uang','created_at','updated_at'];
    public $timestamps = true;
    public function pegawai() {
        return $this->hasMany('app\jabatan','jabatan_id');
    }
    public function kategori() {
        return $this->belongsTo('KategoriLembur','kategori_id');
    }
}
