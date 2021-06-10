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

Route::get('/', function () {
    return view('welcome');
});
route::get('/kp','mahasiswa_controller@kp')->name('indexkp');
route::get('/prakp','mahasiswa_controller@pra_kp')->name('indexpkp');
route::get('/surat_ket','mahasiswa_controller@surat_ket')->name('indexskp');
route::get('/login_user','login_controller@index');
Route::get('login/google', 'login_controller@redirect');
Route::get('login/google/callback', 'login_controller@Callback');
Route::post('/kp/tambah','mahasiswa_controller@tambah');
Route::post('/prakp/tambahprakp','mahasiswa_controller@tambahprakp');
Route::post('/surat_ket/tambahsuratkp','mahasiswa_controller@tambahsuratkp');
Route::get('/koordinator','koordinator_controller@view');

route::get('/proseseditkp/{id}','mahasiswa_controller@editkp')->name('proseseditkp');
route::get('/editkp/{id}','mahasiswa_controller@findidkp');

route::get('/proseseditprakp/{id}','mahasiswa_controller@editprakp')->name('proseseditprakp');
route::get('/editpkp/{id}','mahasiswa_controller@findidpkp');

route::get('/proseseditskp/{id}','mahasiswa_controller@editsuratkp')->name('proseseditskp');
route::get('/editskp/{id}','mahasiswa_controller@findidskp');

Route::get('/koordinator','koordinator_controller@index')->name('koordinator');
route::get('/kooreditketkp/{id}','koordinator_controller@Vedit');
route::get('/prosesviewdata/{id}','koordinator_controller@viewdatakp')->name('prosesviewdata');

route::get('/jadwal','jadwal_controller@index');
route::post('/jadwal/tambah','jadwal_controller@tambah_jadwal');


route::get('/ujian','mahasiswa_controller@jadwal_ujian');

route::get('/dosen','dosen_controller@index');

route::get('/bimbingan','dosen_controller@jadwalbimbingan');
route::get('/addbimbingan','bimbingan_controller@index');
route::post('/bimbingan/tambah','bimbingan_controller@tambah_bimbingan');

route::get('/jadwalkp','jadwalkp_controller@index');
route::get('/lihatjadwalkp','mahasiswa_controller@jadwal_kp');
route::post('/jadwalkp/tambah','jadwalkp_controller@tambah_jadwalkp');