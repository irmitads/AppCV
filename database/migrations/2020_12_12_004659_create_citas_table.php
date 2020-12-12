<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora');

            $table->unsignedInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');

            $table->unsignedInteger('veterinario_id');
            $table->foreign('veterinario_id')->references('id')->on('veterinarios')->onDelete('cascade');


            $table->unsignedInteger('consultorio_id');
            $table->foreign('consultorio_id')->references('id')->on('consultorios')->onDelete('cascade');

            $table->unsignedInteger('diagnostico_id');
            $table->foreign('diagnostico_id')->references('id')->on('diagnosticos')->onDelete('cascade');

            $table->unsignedInteger('pago_id');
            $table->foreign('pago_id')->references('id')->on('pagos')->onDelete('cascade');

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
        Schema::dropIfExists('citas');
    }
}
