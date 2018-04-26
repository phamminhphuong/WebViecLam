<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChungChi;
class ChungchiController extends Controller
{
           // danh sach
           public function getList(){
            $chungchi=ChungChi::all();
            return view('admin.chungchi.list',['chungchi'=>$chungchi]);
        }
        // tao moi
        public function getAdd(){
            return view('admin.chungchi.add');
        }
        public function postAdd(Request $request){
            $this->validate($request,
            [
                'TenChungChi'=>'required|min:3|max:100',
        
            ],
            [
                'TenChungChi.required'=>'Bạn không được để trống tên trình độ',
                'TenChungChi.min'=>'Bạn nhập ít nhất 3 ký tự',
                'TenChungChi.max'=>'Bạn phải nhập ít hơn 100 ký tự',
               
            ]);
            $chungchi=new ChungChi();
            $chungchi->TenChungChi=$request->TenChungChi;
            if($request->NoiCap!=''){
                $chungchi->NoiCap=$request->NoiCap;
            }
            else{
                $chungchi->NoiCap='';
            }
            $chungchi->save();
            return redirect('admin/chungchi/list');
        }
        // sua
        public function getEdit($id){
            $chungchi=ChungChi::find($id);
            return view('admin.chungchi.edit',['chungchi'=>$chungchi]);
        }
        public function postEdit(Request $request, $id){
            $this->validate($request,
            [
                'TenChungChi'=>'required|min:3|max:100',
            ],
            [
                'TenChungChi.required'=>'Bạn không được để trống tên trình độ',
                'TenChungChi.min'=>'Bạn nhập ít nhất 3 ký tự',
                'TenChungChi.max'=>'Bạn phải nhập ít hơn 100 ký tự',
            ]);
            $chungchi=ChungChi::find($id);
            $chungchi->TenChungChi=$request->TenChungChi;
            if($request->NoiCap!=''){
                $chungchi->NoiCap=$request->NoiCap;
            }
            else{
                $chungchi->NoiCap='';
            }
            $chungchi->save();
            return redirect('admin/chungchi/list');
        }
        // xoa
        public function getDelete($id){
            $chungchi=ChungChi::find($id);
            $chungchi->delete();
            return redirect('admin/chungchi/list');
        }
        // detail
        public function getDetail($id){
            $chungchi=ChungChi::find($id);
            return view('admin.chungchi.detail',['chungchi'=>$chungchi]);
        }
}
