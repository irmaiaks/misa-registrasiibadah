<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $table = 'profil';
    protected $fillable = [
        'user_id', 'nik', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'rtrw', 'kelurahan', 'kecamatan', 'no_hp',  
    ];

    public function user()
    {
        return $this->beglonsTo('App\User', 'user_id');
    }

    public function registrasi()
    {
        return $this->hasMany('App\Registrasi', 'registrasi_id');
    }
}
