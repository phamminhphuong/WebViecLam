<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrinhDo;
class TrinhdoController extends Controller
{
       // danh sach
       public function getList(){
        $trinhdo=TrinhDo::all();
        return view('admin.trinhdo.list',['trinhdo'=>$trinhdo]);
    }
    // tao moi
    public function getAdd(){
        return view('admin.trinhdo.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
        [
            'TenTrinhDo'=>'required|min:3|max:100'
        ],
        [
            'TenTrinhDo.required'=>'Bạn không được để trống tên trình độ',
            'TenTrinhDo.min'=>'Bạn nhập ít nhất 3 ký tự',
            'TenTrinhDo.max'=>'Bạn phải nhập ít hơn 100 ký tự',
        ]);
        $trinhdo=new TrinhDo();
        $trinhdo->TenTrinhDo=$request->TenTrinhDo;
        $trinhdo->save();
        return redirect('admin/trinhdo/list');
    }
    // sua
    public function getEdit($id){
        $trinhdo=TrinhDo::find($id);
        return view('admin.trinhdo.edit',['trinhdo'=>$trinhdo]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'TenTrinhDo'=>'required|min:3|max:100'
        ],
        [
            'TenTrinhDo.required'=>'Bạn không được để trống tên ngành',
            'TenTrinhDo.min'=>'Bạn nhập ít nhất 3 ký tự',
            'TenTrinhDo.max'=>'Bạn phải nhập ít hơn 100 ký tự',
        ]);
        $trinhdo=TrinhDo::find($id);
        $trinhdo->TenTrinhDo=$request->TenTrinhDo;
        $trinhdo->save();
        return redirect('admin/trinhdo/list');
    }
    // xoa
    public function getDelete($id){
        $trinhdo=TrinhDo::find($id);
        $trinhdo->delete();
        return redirect('admin/trinhdo/list');
    }
    // detail
    public function getDetail($id){
        $trinhdo=TrinhDo::find($id);
        return view('admin.trinhdo.detail',['trinhdo'=>$trinhdo]);
    }
}
