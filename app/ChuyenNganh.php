<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenNganh extends Model
{
    protected $table="chuyennganh";
    public function PhieuDangTuyen(){
        return $this->hasMany('App\PhieuDangTuyen','MaNganh','id');
    }
    public function HoSoXinViec(){
        return $this->hasMany('App\HoSoXinViec','MaNganh','id');
    }
}
