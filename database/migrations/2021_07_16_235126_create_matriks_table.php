<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_atribut');
            $table->string('id_ipk');
            $table->string('id_pendapatan');
            $table->string('id_tanggungan');
            $table->string('id_semester');
            $table->string('id_prestasi');
            $table->string('n_ipk');
            $table->string('n_pendapatan');
            $table->string('n_tanggungan');
            $table->string('n_semester');
            $table->string('n_prestasi');
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
        Schema::dropIfExists('matriks');
    }
}
