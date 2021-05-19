<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosTeleconsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArchivosTeleconsulta', function (Blueprint $table) {
         
            $table->increments('idArchivosTeleconsulta');
            $table->integer('idTeleconsulta')->unsigned();;
            $table->string('archivo')->nullable();
            $table->foreign('idTeleconsulta')
                ->references('idTeleconsulta')->on('Teleconsulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ArchivosTeleconsulta');
    }
}
