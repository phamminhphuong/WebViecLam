<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChungChi extends Model
{
    protected $table='chungchi';
    public function PhieuDangTuyen(){
        return $this->hasMany('App\PhieuDangTuyen','MaChungChi','id');
    }
    public function HoSoXinViec(){
        return $this->hasMany('App\HoSoXinViec','MaCC','id');
    }
}
