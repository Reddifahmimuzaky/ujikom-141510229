<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LemburPegawai extends Model
{
    //
    protected $table = 'lembur_pegawais';
    protected $fillable = ['id','kode_lembur_id','pegawai_id','jumlah_jam','created_at','updated_at'];
    public $timestamps = true;
    
    public function pegawai() {
        return $this->belongsTo('App\pegawai','pegawai_id');
    }
    public function kategori() {
        return $this->belongsTo('App\KategoriLembur','kode_lembur_id');
    }
}
