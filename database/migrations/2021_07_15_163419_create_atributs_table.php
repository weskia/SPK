<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtributsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_atribut');
            $table->string('tipe');
            $table->string('kepentingan');
            $table->string('bobot');
            $table->string('atribut_pembanding');
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
        Schema::dropIfExists('atributs');
    }
}
