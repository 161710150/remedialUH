<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDosen extends Model
{
    protected $table = 'dosen';
	
	protected $fillable = array('nama', 'nipd');

	public function mahasiswa() {
	
	return $this->hasMany('App\ModelMahasiswa', 'guru_id');
	}
}
