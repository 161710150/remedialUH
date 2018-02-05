<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJurusan extends Model
{
    protected $table = 'jurusan';
	
	protected $fillable = ['nama_jurusan'];

	public function mahasiswa() {
	
	return $this->hasMany('App\ModelMahasiswa', 'kelas_id');
	}
}
