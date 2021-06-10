<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuratKpCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_kp', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nim',8);
            $table->string('lembaga');
            $table->string('alamat');
            $table->string('pimpinan');
            $table->string('no_telp');
            $table->string('fax');
            $table->string('spek');
            $table->string('tools');
            $table->string('dokumen');
            $table->string('status_skp')->nullable();
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
        Schema::dropIfExists('surat_kp');
    }
}
