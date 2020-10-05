<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $table = 'keluhan';
    protected $fillable = [
        'registrasi_id', 'demam', 'tenggorokan', 'pilek', 'batuk', 'sesak',  
    ];

    public function registrasi()
    {
        return $this->beglonsTo('App\Registrasi', 'registrasi_id');
    }
}
