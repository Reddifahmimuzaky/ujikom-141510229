<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    //
    protected $table = 'pegawais';
    protected $fillable = ['id','nip','user_id','jabatan_id','golongan_id','photo'];
    public $timestamps = true;
    
    public function jabatan() {
        return $this->belongsTo('App\jabatan','jabatan_id');
    }
    public function user() {
        return $this->belongsTo('App\User','user_id');
    }
    public function golongan() {
        return $this->belongsTo('app\golongan','golongan_id');
    }
}
