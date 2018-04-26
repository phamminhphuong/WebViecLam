<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table='users';
    public function NhaTuyenDung(){
        return $this->hasMany('App\NhaTuyenDung','MaTaiKhoan','id');
    }
    public function HoSoXinViec(){
        return $this->hasMany('App\HoSoXinViec','MaTaiKhoan','id');
    }
    public function LoaiTaiKhoan(){
        return $this->belongsTo('App\LoaiTaiKhoan','MaLoaiTaiKhoan','id');
    }
}
