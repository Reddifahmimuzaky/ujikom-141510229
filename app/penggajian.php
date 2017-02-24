<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    protected $table = 'penggajians';
    protected $fillable = ['id','tunjangan_pegawai_id','jumlah_jam_lembur','jumlah_uang_lembur','tanggal_pengambilan','gaji_pokok','total_gaji','status_pengambilan','petugas_penerima'];
    public $timestamps = true;

    public function tunpeg() {
        return $this->belongsTo('App\TunjanganPegawai','tunjangan_pegawai_id');
    }
}
