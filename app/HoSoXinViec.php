<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoSoXinViec extends Model
{
    protected $table='hosoxinviec';
    public function ChungChi(){
        return $this->belongsTo('App\ChungChi','MaCC','id');
    }
    public function TaiKhoan(){
        return $this->belongsTo('App\User','MaTaiKhoan','id');
    }
    public function TrinhDo(){
        return $this->belongsTo('App\TrinhDo','MaTrinhDo','id');
    }
    public function ChuyenNganh(){
        return $this->belongsTo('App\ChuyenNganh','MaNganh','id');
    }
}
