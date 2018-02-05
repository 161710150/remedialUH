<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMatakuliah extends Model
{
    protected $table = 'matakuliah';

	protected $fillable = ['nama_matkul','kkm'];

	public function matkul()
	{
		return $this->belongsTomany('App\ModelMatakuliah','matkul_mahasiswa','id_mahasiswa','mapel_id');
	}
}