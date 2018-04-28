<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhieuDangTuyen;
use App\NhaTuyenDung;
use App\ChungChi;
use App\TrinhDo;
use App\ChuyenNganh;
class PhieudangtuyenController extends Controller
{
               // danh sach
               public function getList(){
                $phieudangtuyen=PhieuDangTuyen::all();
                return view('admin.phieudangtuyen.list',['phieudangtuyen'=>$phieudangtuyen]);
            }
            // tao moi
            public function getAdd(){
                $nhatuyendung=NhaTuyenDung::all();
                $chuyennganh=ChuyenNganh::all();
                $trinhdo=TrinhDo::all();
                $chungchi=ChungChi::all();
                return view('admin.phieudangtuyen.add',['nhatuyendung'=>$nhatuyendung,'chuyennganh'=>$chuyennganh,'trinhdo'=>$trinhdo,'chungchi'=>$chungchi]);
            }
            public function postAdd(Request $request){
                $this->validate($request,
                [
                    'TieuDe'=>'required|min:3|max:100',
                    'ViTriTuyenDung'=>'required|min:3|max:100',
                    'NoiLamViec'=>'required|min:3|max:500',
                    'ThoiHanNopHoSo'=>'required',
                    'SoLuongTuyenDung'=>'integer',
                ],
                [
                    'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                    'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                    'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
                    'ViTriTuyenDung.required'=>'Bạn không được để trống vị trí tuyển dụng',
                    'ViTriTuyenDung.min'=>'Bạn nhập vị trí tuyển dụng ít nhất 3 ký tự',
                    'ViTriTuyenDung.max'=>'Bạn phải nhập vị trí tuyển dụng ít hơn 100 ký tự',
                    'MoTaCV.required'=>'Bạn không được để trống mô tả công việc',
                    'MoTaCV.min'=>'Bạn nhập mô tả công việc ít nhất 3 ký tự',
                    'NoiLamViec.required'=>'Bạn không được để trống nơi làm việc',
                    'NoiLamViec.min'=>'Bạn nhập nơi làm việc ít nhất 3 ký tự',
                    'NoiLamViec.max'=>'Bạn phải nhập nơi làm việc ít hơn 500 ký tự',
                    'ThoiHanNopHoSo.required'=>'Bạn không được để trống thời hạn nộp hồ sơ',
                    'SoLuongTuyenDung.integer'=>'Bạn phải nhập số lượng dương',
           
                ]);
                $phieudangtuyen=new PhieuDangTuyen();
                $phieudangtuyen->MaNTD=$request->MaNTD;
                $phieudangtuyen->MaNganh =$request->MaNganh;
                $phieudangtuyen->MaTrinhDo=$request->MaTrinhDo;
                $phieudangtuyen->MaChungChi=$request->MaChungChi;
                $phieudangtuyen->TieuDe=$request->TieuDe;
                $phieudangtuyen->ViTriTuyenDung=$request->ViTriTuyenDung;
                $phieudangtuyen->MoTaCV=$request->MoTaCV;
                $phieudangtuyen->ThoiHanNopHoSo=$request->ThoiHanNopHoSo;
                $phieudangtuyen->SoLuongTuyenDung=$request->SoLuongTuyenDung;
                $phieudangtuyen->NoiLamViec=$request->NoiLamViec;
                if($request->YeuCauKinhNghiem!=''){
                    $phieudangtuyen->YeuCauKinhNghiem=$request->YeuCauKinhNghiem;
                }
                else{
                    $phieudangtuyen->YeuCauKinhNghiem='';
                }
                $phieudangtuyen->LuongKhoiDiem=$request->LuongKhoiDiem;
                $phieudangtuyen->save();
                return redirect('admin/phieudangtuyen/list');
            }
            // sua
            public function getEdit($id){
                $nhatuyendung=NhaTuyenDung::all();
                $chuyennganh=ChuyenNganh::all();
                $trinhdo=TrinhDo::all();
                $chungchi=ChungChi::all();
                $phieudangtuyen=PhieuDangTuyen::find($id);
                return view('admin.phieudangtuyen.edit',['phieudangtuyen'=>$phieudangtuyen,'nhatuyendung'=>$nhatuyendung,'chuyennganh'=>$chuyennganh,'trinhdo'=>$trinhdo,'chungchi'=>$chungchi]);
            }
            public function postEdit(Request $request, $id){
                $this->validate($request,
                [
                    'TieuDe'=>'required|min:3|max:100',
                    'ViTriTuyenDung'=>'required|min:3|max:100',
                    'MoTaCV'=>'required|min:3|max:500',
                    'NoiLamViec'=>'required|min:3|max:500',
                    'ThoiHanNopHoSo'=>'required',
                    'SoLuongTuyenDung'=>'integer',
                ],
                [
                    'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                    'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                    'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
                    'ViTriTuyenDung.required'=>'Bạn không được để trống vị trí tuyển dụng',
                    'ViTriTuyenDung.min'=>'Bạn nhập vị trí tuyển dụng ít nhất 3 ký tự',
                    'ViTriTuyenDung.max'=>'Bạn phải nhập vị trí tuyển dụng ít hơn 100 ký tự',
                    'MoTaCV.required'=>'Bạn không được để trống mô tả công việc',
                    'MoTaCV.min'=>'Bạn nhập mô tả công việc ít nhất 3 ký tự',
                    'MoTaCV.max'=>'Bạn phải nhập mô tả công việc ít hơn 500 ký tự',
                    'NoiLamViec.required'=>'Bạn không được để trống nơi làm việc',
                    'NoiLamViec.min'=>'Bạn nhập nơi làm việc ít nhất 3 ký tự',
                    'NoiLamViec.max'=>'Bạn phải nhập nơi làm việc ít hơn 500 ký tự',
                    'ThoiHanNopHoSo.required'=>'Bạn không được để trống thời hạn nộp hồ sơ',
                    'SoLuongTuyenDung.integer'=>'Bạn phải nhập số lượng dương',
           
                ]);
                $phieudangtuyen=PhieuDangTuyen::find($id);
                $phieudangtuyen->MaNTD=$request->MaNTD;
                $phieudangtuyen->MaNganh =$request->MaNganh;
                $phieudangtuyen->MaTrinhDo=$request->MaTrinhDo;
                $phieudangtuyen->MaChungChi=$request->MaChungChi;
                $phieudangtuyen->TieuDe=$request->TieuDe;
                $phieudangtuyen->ViTriTuyenDung=$request->ViTriTuyenDung;
                $phieudangtuyen->MoTaCV=$request->MoTaCV;
                $phieudangtuyen->ThoiHanNopHoSo=$request->ThoiHanNopHoSo;
                $phieudangtuyen->SoLuongTuyenDung=$request->SoLuongTuyenDung;
                $phieudangtuyen->NoiLamViec=$request->NoiLamViec;
                if($request->YeuCauKinhNghiem!=''){
                    $phieudangtuyen->YeuCauKinhNghiem=$request->YeuCauKinhNghiem;
                }
                else{
                    $phieudangtuyen->YeuCauKinhNghiem='';
                }
                $phieudangtuyen->LuongKhoiDiem=$request->LuongKhoiDiem;
                $phieudangtuyen->save();
                return redirect('admin/phieudangtuyen/list');
            }
            // xoa
            public function getDelete($id){
                $phieudangtuyen=PhieuDangTuyen::find($id);
                $phieudangtuyen->delete();
                return redirect('admin/phieudangtuyen/list');
            }
            // detail
            public function getDetail($id){
                $phieudangtuyen=PhieuDangTuyen::find($id);
                return view('admin.phieudangtuyen.detail',['phieudangtuyen'=>$phieudangtuyen]);
            }

            

        
}
