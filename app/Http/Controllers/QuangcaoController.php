<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuangCao;
class QuangcaoController extends Controller
{
        // danh sach
        public function getList(){
            $quangcao=QuangCao::all();
            return view('admin.quangcao.list',['quangcao'=>$quangcao]);
        }
        // tao moi
        public function getAdd(){
            return view('admin.quangcao.add');
        }
        public function postAdd(Request $request){
            $this->validate($request,
            [
                'TieuDe'=>'required|min:3|max:100',
                'ThoiHanDangQC'=>'required'
               
            ],
            [
                'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
                'ThoiHanDangQC.required'=>'Bạn không được để trống thời hạn quảng cáo',
            
            ]);
            $quangcao=new QuangCao();
            $quangcao->TieuDe=$request->TieuDe;
            $quangcao->ThoiHanDangQC=$request->ThoiHanDangQC;
            if($request->hasFile('HinhAnh'))
            {
                $file=$request->file('HinhAnh');
                $name=$file->getClientOriginalName();
                $HinhAnh=str_random(10)."_".$name;
                $file->move('image_QuangCao',$HinhAnh);
                $quangcao->HinhAnh=$HinhAnh;
            }
            else{
                $quangcao->HinhAnh='';
            }
            $quangcao->save();
            return redirect('admin/quangcao/list');
        }
        // sua
        public function getEdit($id){
            $quangcao=QuangCao::find($id);
            return view('admin.quangcao.edit',['quangcao'=>$quangcao]);
        }
        public function postEdit(Request $request, $id){
            $this->validate($request,
            [
                'TieuDe'=>'required|min:3|max:100',
                'ThoiHanDangQC'=>'required'
               
            ],
            [
                'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
                'ThoiHanDangQC.required'=>'Bạn không được để trống thời hạn quảng cáo',
            
            ]);
            $quangcao=QuangCao::find($id);
            $quangcao->TieuDe=$request->TieuDe;
            $quangcao->ThoiHanDangQC=$request->ThoiHanDangQC;
            if($request->hasFile('HinhAnh'))
            {
                $file=$request->file('HinhAnh');
                $name=$file->getClientOriginalName();
                $HinhAnh=str_random(10)."_".$name;
                $file->move('image_QuangCao',$HinhAnh);
                $quangcao->HinhAnh=$HinhAnh;
            }
            else{
                $quangcao->HinhAnh='';
            }
            $quangcao->save();
            return redirect('admin/quangcao/list');
        }
        // xoa
        public function getDelete($id){
            $quangcao=QuangCao::find($id);
            $quangcao->delete();
            return redirect('admin/quangcao/list');
        }
        // detail
        public function getDetail($id){
            $quangcao=QuangCao::find($id);
            return view('admin.quangcao.detail',['quangcao'=>$quangcao]);
        }
}
