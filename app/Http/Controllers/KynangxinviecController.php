<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KyNangXinViec;
use App\NhaTuyenDung;
class KynangxinviecController extends Controller
{
    // danh sach
    public function getList(){
        $kynangxinviec=KyNangXinViec::all();
        return view('admin.kynangxinviec.list',['kynangxinviec'=>$kynangxinviec]);
    }
    // tao moi
    public function getAdd(){
        $nhatuyendung=NhaTuyenDung::all();
        return view('admin.kynangxinviec.add',['nhatuyendung'=>$nhatuyendung]);
    }
    public function postAdd(Request $request){
        $this->validate($request,
        [
            'TieuDe'=>'required|min:3|max:100',
            'NoiDung'=>'required|min:3',
        ],
        [
            'TieuDe.required'=>'Bạn không được để trống tiêu đề',
            'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
            'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
            'NoiDung.required'=>'Bạn không được để trống nội dung',
            'NoiDung.min'=>'Bạn nhập nội dung ít nhất 3 ký tự',
        
        ]);
        $kynangxinviec=new KyNangXinViec();
        $kynangxinviec->TieuDe=$request->TieuDe;
        $kynangxinviec->NoiDung=$request->NoiDung;
        $kynangxinviec->MaNTD=$request->MaNTD;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_KyNang',$HinhAnh);
            $kynangxinviec->HinhAnh=$HinhAnh;
        }
        else{
            $kynangxinviec->HinhAnh='';
        }
        $kynangxinviec->save();
        return redirect('admin/kynangxinviec/list');
    }
    // sua
    public function getEdit($id){
        $kynangxinviec=KyNangXinViec::find($id);
        $nhatuyendung=NhaTuyenDung::all();
        return view('admin.kynangxinviec.edit',['nhatuyendung'=>$nhatuyendung,'kynangxinviec'=>$kynangxinviec]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'TieuDe'=>'required|min:3|max:100',
            'NoiDung'=>'required|min:3',
        ],
        [
            'TieuDe.required'=>'Bạn không được để trống tiêu đề',
            'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
            'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
            'NoiDung.required'=>'Bạn không được để trống nội dung',
            'NoiDung.min'=>'Bạn nhập nội dung ít nhất 3 ký tự',
        
        ]);
        $kynangxinviec=KyNangXinViec::find($id);
        $kynangxinviec->TieuDe=$request->TieuDe;
        $kynangxinviec->NoiDung=$request->NoiDung;
        $kynangxinviec->MaNTD=$request->MaNTD;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_KyNang',$HinhAnh);
            $kynangxinviec->HinhAnh=$HinhAnh;
        }
        else{
           
        }
        $kynangxinviec->save();
        return redirect('admin/kynangxinviec/list');
    }
    // xoa
    public function getDelete($id){
        $kynangxinviec=KyNangXinViec::find($id);
        $kynangxinviec->delete();
        return redirect('admin/kynangxinviec/list');
    }
    // detail
    public function getDetail($id){
        $kynangxinviec=KyNangXinViec::find($id);
        return view('admin.kynangxinviec.detail',['kynangxinviec'=>$kynangxinviec]);
    }
}
