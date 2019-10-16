	<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\TheLoai;

Route::get('thu',function(){
	$theloai = TheLoai::find(1);
	foreach ($theloai->loaitin as $loaitin) {
		echo $loaitin->Ten."<br>";
		# code...
	}
});





Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'TheLoai'],function(){
		Route::get('danhsach','TheLoaiController@getDanhSach');

		Route::get('sua/{id}','TheLoaiController@getSua');
		Route::post('sua/{id}','TheLoaiController@postSua');

		Route::get('them','TheLoaiController@getThem');
		Route::post('themPost','TheLoaiController@postThem');

		Route::get('xoa/{id}','TheLoaiController@getxoa');

	});

	Route::group(['prefix'=>'LoaiTin'],function(){
		Route::get('danhsach','LoaiTinController@getDanhSach');
		Route::get('sua','LoaiTinController@getSua');
		Route::get('them','LoaiTinController@getThem');
	});

	Route::group(['prefix'=>'TinTuc'],function(){
		Route::get('danhsach','TinTucController@getDanhSach');
		Route::get('sua','TinTucController@getSua');
		Route::get('them','TinTucController@getThem');
	});
});
