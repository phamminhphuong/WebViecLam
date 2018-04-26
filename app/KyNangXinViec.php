<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KyNangXinViec extends Model
{
    protected $table='kynangxinviec';
    public function NhaTuyenDung(){
        return $this->belongsTo('App\NhaTuyenDung','MaNTD','id');
    }
}
