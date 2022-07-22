<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendidikans', function (Blueprint $table) {
            $table->id('id');
            $table->string('jns_pendaftaran');
            $table->string('jalur_pendaftaran');
            $table->string('nama_sekolah');
            $table->string('stts_sekolah');
            $table->string('alamat_sekolah');
            $table->string('jurusan');
            $table->string('jns_kelas');
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
        Schema::dropIfExists('datapendidikans');
    }
}
