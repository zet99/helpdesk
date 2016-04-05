<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Helpdesk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aduan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemohon');
            $table->string('jabatan_pemohon');
            $table->string('no_hp');
            $table->string('skpd');
            $table->dateTime('tanggal')->index();
            $table->string('id_user')->index();
        });
        Schema::create('tindakan', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tanggal_penanganan')->index();
            $table->dateTime('tanggal_selesai')->index();
            $table->string('root_cause');
            $table->string('tindakan');
            $table->tinyInteger('hasil');
            $table->tinyInteger('konfirmasi');
            $table->string('id_user')->index();
            $table->Integer('id_aduan')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tindakan');
        Schema::drop('aduan');
    }
}
