<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertMahasiswa2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function($table) {
            $table->unsignedInteger('kelas_id')->after('nis')->nullable();
            $table->foreign('kelas_id')->references('id')->on('jurusan')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function($table) {
            $table->dropColumn('kelas_id');
        });
    }
}
