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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/danhsachmonan', 'Backend\MonAnController');
Route::resource('/admin/danhsachloaimonan', 'Backend\LoaiMonAnController');
Route::resource('/admin/danhsachdonvitinh', 'Backend\DonViTinhController');
Route::resource('/admin/danhsachbep', 'Backend\BepController');
Route::resource('/admin/danhsachnhomthucdon', 'Backend\NhomThucDonController');
