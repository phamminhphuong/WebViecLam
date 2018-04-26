<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuyenNganh;
class ChuyennganhController extends Controller
{
    // danh sach
    public function getList(){
        $chuyennganh=ChuyenNganh::all();
        return view('admin.chuyennganh.list',['chuyennganh'=>$chuyennganh]);
    }
    // tao moi
    public function getAdd(){
        return view('admin.chuyennganh.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
        [
            'TenNganh'=>'required|min:3|max:100'
        ],
        [
            'TenNganh.required'=>'Bạn không được để trống tên ngành',
            'TenNganh.min'=>'Bạn nhập ít nhất 3 ký tự',
            'TenNganh.max'=>'Bạn phải nhập ít hơn 100 ký tự',
        ]);
        $chuyennganh=new ChuyenNganh();
        $chuyennganh->TenNganh=$request->TenNganh;
        $chuyennganh->save();
        return redirect('admin/chuyennganh/list');
    }
    // sua
    public function getEdit($id){
        $chuyennganh=ChuyenNganh::find($id);
        return view('admin.chuyennganh.edit',['chuyennganh'=>$chuyennganh]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'TenNganh'=>'required|min:3|max:100'
        ],
        [
            'TenNganh.required'=>'Bạn không được để trống tên ngành',
            'TenNganh.min'=>'Bạn nhập ít nhất 3 ký tự',
            'TenNganh.max'=>'Bạn phải nhập ít hơn 100 ký tự',
        ]);
        $chuyennganh=ChuyenNganh::find($id);
        $chuyennganh->TenNganh=$request->TenNganh;
        $chuyennganh->save();
        return redirect('admin/chuyennganh/list');
    }
    // xoa
    public function getDelete($id){
        $chuyennganh=ChuyenNganh::find($id);
        $chuyennganh->delete();
        return redirect('admin/chuyennganh/list');
    }
    // detail
    public function getDetail($id){
        $chuyennganh=ChuyenNganh::find($id);
        return view('admin.chuyennganh.detail',['chuyennganh'=>$chuyennganh]);
    }
}
