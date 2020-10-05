<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuota extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $table = 'kuota';
    protected $fillable = [
        'jadwal_ibadah_id', 'kuota',
    ];

    public $timestamps = false;
    
    public function jadwal()
    {
        return $this->beglonsTo('App\JadwalIbadah', 'jadwal_ibadah_id');
    }
}
