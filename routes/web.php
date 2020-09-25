<?php

use Illuminate\Support\Facades\Route;
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

/*Route::get('/test', 'TestController@index');*/
//Route::get('/test','app\Http\Controllers\TestController@index');


 
Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('suratmasuk', 'SuratmasukController@index')->name('suratmasuk');

//Sistem
    Route::get('pengguna', 'PenggunaController@index')->name('pengguna');
    Route::get('bidang', 'BidangController@index')->name('bidang');
    Route::get('subbidang', 'SubbidangController@index')->name('subbidang');
    
/*Route::get('suratmasuk', function () {
    return view('dashboard/suratmasuk');
});*/

Route::get('tsuratmasuk', function () {
    return view('dashboard/tsuratmasuk');
});

Route::get('dismasuk', function () {
    return view('dashboard/dismasuk');
});

Route::get('diskeluar', function () {
    return view('dashboard/diskeluar');
});

Route::get('suratkeluar', function () {
    return view('dashboard/suratkeluar');
});
Route::get('tsuratkeluar', function () {
    return view('dashboard/tsuratkeluar');
});
Route::get('expedisi', function () {
    return view('dashboard/expedisi');
});


//report
Route::get('rsuratmasuk', function () {
    return view('dashboard/report/rsuratmasuk');
});
Route::get('rsuratkeluar', function () {
    return view('dashboard/report/rsuratkeluar');
});
Route::get('rexpedisi', function () {
    return view('dashboard/report/rexpedisi');
});

Route::get('konsep', function () {
    return view('dashboard/konsep');
});

 
});

Route::get('backup', function () {
    return view('dashboard/backup');
});

//Route::get('/coba','CobaController@index');

/*Route::get('/', function () {
    return view('dashboard/dashboard');
});
*/

//sekum
Route::get('suratmasuksekum', function () {
    return view('sekum/suratmasuksekum');
});