<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nisn',255);
            $table->string('nama_lengkap',255);
            $table->string('jenis_kelamin',20);
            $table->string('tempat_lahir',255);
            $table->string('tanggal_lahir',50);
            $table->string('agama',15);
            $table->string('alamat',255);
            $table->string('rt',4);
            $table->string('rw',4);
            $table->string('kelurahan',50);
            $table->string('kecamatan',50);
            $table->string('kabupaten',50);
            $table->string('provinsi',50);
            $table->string('status_tempat_tinggal',40);
            $table->string('no_telp',15);
            $table->string('email',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datasiswas');
    }
}
