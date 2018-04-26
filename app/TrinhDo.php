<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrinhDo extends Model
{
    protected $table='trinhdo';
    public function PhieuDangTuyen(){
        return $this->hasMany('App\PhieuDangTuyen','MaTrinhDo','id');
    }
    public function HoSoXinViec(){
        return $this->hasMany('App\HoSoXinViec','MaTrinhDo','id');
    }
}
