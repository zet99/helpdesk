<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tindakan extends Model
{
    protected $table = 'tindakan';
    protected $fillable = ['tanggal_penanganan', 'tanggal_selesai', 'root_cause', 'tindakan', 'hasil', 'konfirmasi' , 'id_user', 'id_aduan'];
    public $timestamps = false;
}
