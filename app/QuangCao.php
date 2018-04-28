<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuangCao extends Model
{
    protected $table='quangcao';
    public function NhaTuyenDung(){
        return $this->belongsTo('App\NhaTuyenDung','MaNTD','id');
    }
}
