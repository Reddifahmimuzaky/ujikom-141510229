<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class golongan extends Model
{
    protected $table = 'golongans';
    protected $fillable = ['id','kode_golongan','nama_golongan','besaran_uang','created_at','updated_at'];
    public $timestamps = true;
    public function pegawai() {
        return $this->hasMany('App\pegawai','golongan_id');
    }
    public function kategori() {
        return $this->hasMany('App\KategoriLembur','kategori_id');
    }
}
