<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('empresa', 30);
            $table->integer('paga');
            $table->integer('vacante');
            $table->string('telefono');
            $table->string('descripcion');
            $table->string('descripcion1');
            $table->string('descripcion2');
            $table->string('descripcion3');
            $table->string('descripcion4');
            $table->string('descripcion5');
            $table->string('descripcion6');
            $table->string('descripcion7');

            $table->string('email');
            $table->string('usuario');

            // $table->unsignedBigInteger('usuario_id')->unique();
            // $table->bigInteger('usuario_id')->unsigned();

            // $table
            //     ->foreign('usuario_id')
            //     ->references('id')
            //     ->on('usuarios')
            //     ->onDelete('cascade');
            //     ->onUpdate();

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
        Schema::dropIfExists('empresas');
    }
}
