<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAhpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_mahasiswa');
            $table->string('id_ipk');
            $table->string('id_pendapatan');
            $table->string('id_tanggungan');
            $table->string('id_semester');
            $table->string('id_prestasi');
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
        Schema::dropIfExists('ahp');
    }
}
