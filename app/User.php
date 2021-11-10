<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function divisionName(){
    return $this->belongsTo(Division::class, 'division_id', 'id');
}
    public function districtName(){
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
    public function areaName(){
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
    protected $fillable = [
        'name','phone', 'email', 'password','image','division_id','district_id','area_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
