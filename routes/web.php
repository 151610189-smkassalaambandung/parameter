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
