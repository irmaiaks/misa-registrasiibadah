<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalIbadah extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'jadwal_ibadah';
    protected $fillable = [
        'jenis_id', 'jadwal', 'hari', 'mulai', 'selesai', 'kuota',
    ];

    public $timestamps = false;

    public function jenis()
    {
        return $this->belongsTo('App\JenisIbadah', 'jenis_id');
    }

    public function kuota()
    {
        return $this->hasOne('App\Kuota', 'jadwal_ibadah_id');
    }

    public function registrasi()
    {
        return $this->hasMany('App\Registrasi', 'jadwal_ibadah_id');
    }
}
