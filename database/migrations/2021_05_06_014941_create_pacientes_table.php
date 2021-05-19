<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paciente', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idPaciente');
            $table->char('dni', 8);
            $table->string('nombres', 100);
            $table->string('apellidos', 150);
            $table->string('correo', 200);
            $table->string('telefono', 12);
            $table->string('clave');
            $table->string('foto')->nullable();

            $table->unique(["dni"], 'dni_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Paciente');
    }
}
