<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMahasiswa extends Model
{
	protected $table = 'mahasiswa';

	protected $fillable = ['nama', 'nis','id_dosen','kelas_id'];

	public function wali() 
	{
	return $this->hasOne('App\ModelWali', 'id_mahasiswa');
	}
	public function dosen ()
	{
		return $this->belongsTo('App\ModelDosen','guru_id');
	}
	public function matkul()
	{
		return $this->belongsTomany('App\ModelMatakuliah','matkul_mahasiswa','id_mahasiswa','mapel_id');
	}
	public function jurusan()
	{
		return $this->belongsTo('App\ModelJurusan','kelas_id');
	}
}
