<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KpCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semester');
            $table->string('tahun');
            $table->string('judul_kp');
            $table->string('tools');
            $table->char('nim',8);
            $table->integer('id_jadwal')->nullable();
            $table->string('lembaga');
            $table->string('alamat');
            $table->string('pimpinan');
            $table->string('no_telp');
            $table->string('fax');
            $table->string('spek');
            $table->text('dokumen');
            $table->string('status_kp')->nullable();
            $table->string('status_ujian')->nullable();
            $table->integer('dosen_id')->nullable();
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
        Schema::dropIfExists('kp');
    }
}
