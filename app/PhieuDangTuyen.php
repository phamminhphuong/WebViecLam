<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuDangTuyen extends Model
{
    protected $table='phieudangtuyen';
    public function NhaTuyenDung(){
        return $this->belongsTo('App\NhaTuyenDung','MaNTD','id');
    }
    public function ChuyenNganh(){
        return $this->belongsTo('App\ChuyenNganh','MaNganh','id');
    }
    public function TrinhDo(){
        return $this->belongsTo('App\TrinhDo','MaTrinhDo','id');
    }
    public function ChungChi(){
        return $this->belongsTo('App\ChungChi','MaChungChi','id');
    }
}
