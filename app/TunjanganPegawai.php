<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganPegawai extends Model
{
    protected $table = 'tunjangan_pegawais';
    protected $fillable = ['id','kode_tunjangan_id','pegawai_id'];
    public $timestamps = true;

    public function tunpeg() {
        return $this->belongsTo('App\TunjanganPegawai','kode_tunjangan_id');
    }

    public function pegawai() {
        return $this->belongsTo('App\pegawai','pegawai_id');
    }
}
