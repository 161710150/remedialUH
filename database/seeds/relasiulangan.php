<?php

use Illuminate\Database\Seeder;
use App\ModelWali;
use App\ModelMahasiswa;
use App\ModelDosen;
use App\ModelJurusan;
use App\ModelMatakuliah;
class relasiulangan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		$dosen = ModelDosen::create(array(
			'nama' => 'Rahmat',
			'nipd' => '1234567890',
			'alamat' => 'Jl. Soekarno'
		));

		$this->command->info('Data dosen telah diisi!');

		$jurusan = ModelJurusan::create(array(
			'nama_jurusan' => 'RPL'
		));
		$this->command->info('Data jurusan telah diisi!');

		$matkul = ModelMatakuliah::create(array(
			'nama_matkul' => 'indo',
			'kkm' => '78'
		));
		$this->command->info('beres');

		$a = ModelMahasiswa::create(array(
			'nama' => 'Dani',
			'nis'  => '887615072',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan->id
		));

		$b = ModelMahasiswa::create(array(
			'nama' => 'fajar',
			'nis'  => '189765088',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan->id
		));

		$c = ModelMahasiswa::create(array(
			'nama' => 'Puji Rahayu',
			'nis'  => '187865768',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan->id
		));

		$this->command->info('Mahasiswa telah diisi!');

	
		ModelWali::create(array(
			'nama'  => 'Dadang',
			'alamat'=> 'Jl. Aceh',
			'id_mahasiswa' => $a->id
		));
		ModelWali::create(array(
			'nama'  => 'Wawan',
			'alamat'=> 'Jl. Sumatera',
			'id_mahasiswa' => $b->id
		));
		ModelWali::create(array(
			'nama'  => 'Tontowi',
			'alamat'=> 'Jl. Lombok',
			'id_mahasiswa' => $c->id
		));
		$this->command->info('Data mahasiswa dan wali telah diisi!');
		
		$a->matkul()->attach($matkul->id);
		$b->matkul()->attach($matkul->id);
		$c->matkul()->attach($matkul->id);

    }
}
