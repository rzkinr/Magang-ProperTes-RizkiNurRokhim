<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('id_pegawai');
            $table->string('nama_pegawai');
            $table->string('gaji_pegawai');
            $table->string('umur_pegawai');
            $table->string('profil_image');
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
        Schema::dropIfExists('table_pegawai');
    }
}
