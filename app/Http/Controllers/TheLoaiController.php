<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
class TheLoaiController extends Controller
{
    /*==================================Show Danh Sach THe Loai=================================================*/
    public function getDanhSach(){
    	$theloai = TheLoai::all();
    	return view('admin.TheLoai.danhsach',['theloaitruyendi'=>$theloai]);
    }
    /*===================================================================================*/






    /*====================================Sua The Loai ===============================================*/
    public function getSua($id){
    	$theloai = TheLoai::find($id);
    	return view('admin.TheLoai.sua',['theloaitruyensangtrangsua'=>$theloai]);
    }

    public function postSua(Request $request,$id){
    	$bienlaydulieu = TheLoai::find($id);
    	$this->validate($request,
    		[
    			'Ten'=> 'required|unique:TheLoai,Ten|min:3|max:100'
    		],

    		[
    			'Ten.required'=>"ban chua nhap ten the loai de sua",
    			'Ten.unique'=>"ten the loai da bi trung",
    			'Ten.max'=>"ten ban nhap 3-100 ki tu",
    			'Ten.min'=>"ten ban nhap 3-100 ki tu",
    		]);
    	$bienlaydulieu->Ten = $request->Ten;
    	$bienlaydulieu->TenKhongDau = changeTitle($request->Ten);

    	$bienlaydulieu->save();

    	return redirect('admin/TheLoai/sua/'.$id)->with('thongbao','sua thanh cong');


    	
    }
    /*===================================================================================*/







    /*====================================Them The Loai===============================================*/
    public function getThem(){
    	return view('admin.TheLoai.them');
    	
    }

    public function postThem(Request $request){

    	$this->validate($request,
    	[
    		'Ten'=>'required|min:3|max:100|unique:TheLoai,Ten'
    	],
    	[
    		'Ten.required'=>'ban chua nhap ten',
    		'Ten.unique'=>"ten the loai da bi trung",
    		'Ten.min'=>"ten nhap phai tu 3-100 ki tu",
    		'Ten.max'=>"ten nhap phai tu 3-100 ki tu"
    	]);

    	$theloai = new TheLoai;
    	$theloai->Ten = $request->Ten;
    	$theloai->TenKhongDau = changeTitle($request->Ten);

    	$theloai->save();

    	return redirect('admin/TheLoai/them')->with('thongbao','them thanh cong');
    	    	
    }
    /*===================================================================================*/



    public function getxoa($id){
    	$bien = TheLoai::find($id)->delete();
    	return redirect('admin/TheLoai/danhsach')->with('thongbao','ban da xoa thanh cong');

    }





}
