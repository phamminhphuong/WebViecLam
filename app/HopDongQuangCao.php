<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HopDongQuangCao extends Model
{
    protected $table="hopdongquangcao";
    public function NhaTuyenDung(){
        return $this->belongsTo('App\NhaTuyenDung','MaNTD','id');
    }
}
