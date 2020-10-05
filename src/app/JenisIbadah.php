<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisIbadah extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'jenis_ibadah';
    protected $fillable = [
        'jenis', 
    ];

    public $timestamps = false;

    public function jadwal()
    {
    	return $this->hasMany('App\JadwalIbadah', 'jenis_id');
    }
}
