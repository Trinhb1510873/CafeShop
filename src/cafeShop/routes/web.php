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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
//Backend
Route::get('/admin/danhsachmonan/print', 'Backend\MonAnController@prints')->name('danhsachmonan.print');
Route::get('/admin/danhsachmonan/excel', 'Backend\MonAnController@excel')->name('danhsachmonan.excel');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/danhsachmonan', 'Backend\MonAnController');
Route::resource('/admin/danhsachloaimonan', 'Backend\LoaiMonAnController');
Route::resource('/admin/danhsachdonvitinh', 'Backend\DonViTinhController');
Route::resource('/admin/danhsachbep', 'Backend\BepController');
Route::resource('/admin/danhsachnhomthucdon', 'Backend\NhomThucDonController');
Route::resource('/admin/danhsachban', 'Backend\BanController');
Route::resource('/admin/danhsachtang', 'Backend\TangController');
Route::resource('/admin/danhsachchucvu', 'Backend\ChucVuController');
Route::resource('/admin/danhsachbophan', 'Backend\BoPhanController');
Route::resource('/admin/danhsachcuahang', 'Backend\CuaHangController');
Route::resource('/admin/danhsachchinhanh', 'Backend\ChiNhanhController');
Route::resource('/admin/danhsachnhanvien', 'Backend\NhanVienController');
Route::resource('/admin/danhsachkho', 'Backend\KhoController');
Route::resource('/admin/danhsachnhomnvl', 'Backend\NhomNVLController');
Route::resource('/admin/danhsachnvl', 'Backend\NguyenVatLieuController');
Route::resource('/admin/danhsachloaictkm', 'Backend\LoaiCTKMController');
Route::resource('/admin/danhsachctkm', 'Backend\ChuongTrinhKhuyenMaiController');

// frontend
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');
Route::get('/gioi-thieu', 'Frontend\FrontendController@about')->name('frontend.about');
Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');
Route::post('/lien-he/goi-loi-nhan', 'Frontend\FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');
Route::get('/san-pham', 'Frontend\FrontendController@product')->name('frontend.product');
Route::get('/san-pham/{id}', 'FrontendController@productDetail')->name('frontend.productDetail');
Route::get('/gio-hang', 'Frontend\FrontendController@cart')->name('frontend.cart');
Route::post('/dat-hang', 'Frontend\FrontendController@order')->name('frontend.order');
Route::get('/dat-hang/hoan-tat', 'Frontend\FrontendController@orderFinish')->name('frontend.orderFinish');