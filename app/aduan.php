<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aduan extends Model
{
    protected $table = 'aduan';
    protected $fillable = ['nama_pemohon', 'jabatan_pemohon', 'no_hp', 'id_skpd', 'tanggal', 'tujuan' , 'id_user'];
    public function skpd()
    {
    	return $this->hasOne('App\skpd', 'id', 'id_skpd');
    }
    public function penanganan()
    {
        return $this->hasMany('App\tindakan','id_aduan');
    }

    public function penangananAll()
    {
    	return $this->hasMany('App\tindakan', 'id_aduan', 'id');
    }
}
