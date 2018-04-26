<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaTuyenDung extends Model
{
    protected $table='nhatuyendung';
    
    public function TaiKhoan(){
        return $this->belongsTo('App\User','MaTaiKhoan','id');
    }
    public function PhieuDangTuyen(){
        return $this->hasMany('App\NhaTuyenDung','MaNTD','id');
    }
    public function HopDongQuangCao(){
        return $this->hasMany('App\HopDongQuangCao','MaNTD','id');
    }
    public function KyNangXinViec(){
        return $this->hasMany('App\KyNangXinViec','MaNTD','id');
    }
}
