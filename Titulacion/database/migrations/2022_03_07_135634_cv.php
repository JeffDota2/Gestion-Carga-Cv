<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojas', function (Blueprint $table) {
            /** Datos Perosnales*/
            $table->bigIncrements('id');
            $table->integer('cedula');
            $table->string('nombreuno');
            $table->string('nombredos');
            $table->string('apellidouno');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('correo');
            $table->string('colegio');
            $table->integer('fechaingreso');
            $table->integer('fechafin');
            $table->string('uni');
            $table->integer('fechainicio');
            $table->integer('fechafinal');
            $table->string('curso');
            $table->integer('fechaini');
            $table->integer('fechafi');
            /** Experiencia Laboral*/

            $table->string('empresa');
            $table->string('cargo');
            $table->string('descripcion');
            $table->integer('periodouno');
            $table->integer('periododos');

            $table->string('empresados');
            $table->string('cargodos');
            $table->string('descripciondos');
            $table->integer('periodou');
            $table->integer('periodod');
            /** Idiomas*/

            $table->string('idioma');
            $table->string('nivel');

            $table->string('idiomados');
            $table->string('niveldos');

            /** Areas de Conocimiento*/
            $table->string('areau');
            $table->string('conocimientou');
            $table->string('nivelu');
            
            $table->string('aread');
            $table->string('conocimientod');
            $table->string('niveld');
            
            $table->string('areat');
            $table->string('conocimientot');
            $table->string('niveltr');

            /**Referencias Perosnales*/
            $table->string('nom');
            $table->string('relacion');
            $table->string('contacto');

            $table->string('nomu');
            $table->string('relaciond');
            $table->string('contactod');
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
        //
    }
};
