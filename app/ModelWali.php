<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelWali extends Model
{
    protected $table = 'wali';
	
	protected $fillable = ['nama', 'id_mahasiswa'];
	
	public function ModelMahasiswa() {
	
	return $this->belongsTo('App\ModelMahasiswa', 'id_mahasiswa');
	}
}
