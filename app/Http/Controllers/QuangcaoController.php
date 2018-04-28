<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuangCao;
use App\NhaTuyenDung;
class QuangcaoController extends Controller
{
        // danh sach
        public function getList(){
            $quangcao=QuangCao::all();
            return view('admin.quangcao.list',['quangcao'=>$quangcao]);
        }
        // tao moi
        public function getAdd(){
            $nhatuyendung=NhaTuyenDung::all();
            return view('admin.quangcao.add',['nhatuyendung'=>$nhatuyendung]);
        }
        public function postAdd(Request $request){
            $this->validate($request,
            [
                'TieuDe'=>'required|min:3|max:100',
                'NoiDung'=>'required|min:3|max:2500',
                'ChiPhi'=>'required',
                'ThoiHanDangQC'=>'required',
                'Link'=>'required',
                'UuTien'=>'required',
               
            ],
            [
                'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
                'NoiDung.required'=>'Bạn không được để trống nội dung',
                'NoiDung.min'=>'Bạn nhập nội dung ít nhất 3 ký tự',
                'NoiDung.max'=>'Bạn phải nhập nội dung ít hơn 2500 ký tự',
                'ThoiHanDangQC.required'=>'Bạn không được để trống thời hạn quảng cáo',
                'UuTien.required'=>'Bạn không được để trống ưu tiên',
                'Link.required'=>'Bạn không được để trống link',
                'Link.required'=>'Bạn không được để trống chi phí',
            
            ]);
            $quangcao=new QuangCao();
            $quangcao->MaNTD=$request->MaNTD;
            $quangcao->TieuDe=$request->TieuDe;
            $quangcao->NoiDung=$request->NoiDung;
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
            $quangcao->ThoiHanDangQC=$request->ThoiHanDangQC;
            $quangcao->ChiPhi=$request->ChiPhi;
            if($request->KhachHangXacNhan=='true'){
                $quangcao->KhachHangXacNhan=1;
            }
            else{
                $quangcao->KhachHangXacNhan=0;
            }
            if($request->AdminXacNhan=='true'){
                $quangcao->AdminXacNhan=1;
            }
            else{
                $quangcao->AdminXacNhan=0;
            }
            $quangcao->Link=$request->Link;
            $quangcao->UuTien=$request->UuTien;
            $quangcao->save();
            return redirect('admin/quangcao/list');
        }
        // sua
        public function getEdit($id){
            $quangcao=QuangCao::find($id);
            $nhatuyendung=NhaTuyenDung::all();
            return view('admin.quangcao.edit',['quangcao'=>$quangcao,'nhatuyendung'=>$nhatuyendung]);
        }
        public function postEdit(Request $request, $id){
            $this->validate($request,
            [
                'TieuDe'=>'required|min:3|max:100',
                'NoiDung'=>'required|min:3|max:2500',
                'ChiPhi'=>'required',
                'ThoiHanDangQC'=>'required',
                'Link'=>'required',
                'UuTien'=>'required',
               
            ],
            [
                'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
                'NoiDung.required'=>'Bạn không được để trống nội dung',
                'NoiDung.min'=>'Bạn nhập nội dung ít nhất 3 ký tự',
                'NoiDung.max'=>'Bạn phải nhập nội dung ít hơn 2500 ký tự',
                'ThoiHanDangQC.required'=>'Bạn không được để trống thời hạn quảng cáo',
                'UuTien.required'=>'Bạn không được để trống ưu tiên',
                'Link.required'=>'Bạn không được để trống link',
                'Link.required'=>'Bạn không được để trống chi phí',
            
            ]);
            $quangcao=QuangCao::find($id);
            $quangcao->MaNTD=$request->MaNTD;
            $quangcao->TieuDe=$request->TieuDe;
            $quangcao->NoiDung=$request->NoiDung;
            if($request->hasFile('HinhAnh'))
            {
                $file=$request->file('HinhAnh');
                $name=$file->getClientOriginalName();
                $HinhAnh=str_random(10)."_".$name;
                $file->move('image_QuangCao',$HinhAnh);
                $quangcao->HinhAnh=$HinhAnh;
            }
            else{

            }
            $quangcao->ThoiHanDangQC=$request->ThoiHanDangQC;
            $quangcao->ChiPhi=$request->ChiPhi;
            if($request->KhachHangXacNhan=='true'){
                $quangcao->KhachHangXacNhan=1;
            }
            else{
                $quangcao->KhachHangXacNhan=0;
            }
            if($request->AdminXacNhan=='true'){
                $quangcao->AdminXacNhan=1;
            }
            else{
                $quangcao->AdminXacNhan=0;
            }
            $quangcao->Link=$request->Link;
            $quangcao->UuTien=$request->UuTien;
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
