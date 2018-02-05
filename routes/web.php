<?php
use App\ModelWali;
use App\ModelMahasiswa;
use App\ModelDosen;
use App\ModelJurusan;
use App\ModelMatakuliah;
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
Route::get('soal1', function (){
	$dosen = ModelDosen::with('Mahasiswa')->get();
	return view('soal1',compact('dosen'));
});
Route::get('soal2', function (){
	$mahasiswa = ModelMahasiswa::where('nama','=','Dani')->get();
	return view('soal2',compact('mahasiswa'));
});
Route::get('soal3', function (){
	$mahasiswa = ModelMahasiswa::where('nama','=','Dani')->get();
	return view('soal3',compact('mahasiswa'));
});
Route::get('soal4', function (){
	$mahasiswa = ModelMahasiswa::with('dosen','wali','jurusan','matkul')->get();
	return view('soal4',compact('mahasiswa'));
});