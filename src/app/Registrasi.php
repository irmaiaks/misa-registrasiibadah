<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $table = 'registrasi';
    protected $fillable = [
        'profil_id', 'jadwal_ibadah_id', 'qr_code', 
    ];

    public function profil()
    {
        return $this->belongsTo('App\Profil', 'profil_id');
    }

    public function registrasi()
    {
        return $this->hasOne('App\Keluhan', 'registrasi_id');
    }

    public function jadwal()
    {
        return $this->belongsTo('App\JadwalIbadah', 'jadwal_ibadah_id');
    }
}
