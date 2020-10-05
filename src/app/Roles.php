<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $table = 'roles';
    protected $fillable = [
        'role',  
    ];

    public function user()
    {
        return $this->hasMany('App\User', 'role_id');
    }
}
