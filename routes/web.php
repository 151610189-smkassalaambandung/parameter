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

Route::get('testmodel',function(){
	$a = App\modelProduk::all();
	$b = App\modelPengguna::all();
	$c = App\modelPengaturan::all();
	return $a . $b . $c;
});

//Latihan Controller
Route::get('/test','MyController@percobaan');
Route::get('/test2','MyController@percobaan2');
Route::get('/test3','MyController@percobaan3');
Route::get('/test4','MyController@percobaan4');
Route::get('/test5','MyController@percobaan5');
Route::get('/test6','MyController@percobaan6');
Route::get('/test7','MyController@percobaan7');
Route::get('/test9','SiswaController@percobaan9');

//parameter
Route::get('/test8/{data}/{data2?}','MyController@percobaan8');
Route::get('/show/{siswa}','SiswaController@show');