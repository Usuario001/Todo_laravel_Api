<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('todos', function (Blueprint $tabla) {
            $tabla->collation = 'utf8mb4_general_ci';
            $tabla->charset = 'utf8mb4';
            $tabla->increments('id_todo');
            $tabla->string('titulo');
            $tabla->string('responsible');
            $tabla->text('description');
            $tabla->string('priority');
            $tabla->integer('activa');
            $tabla->timestamps();
            $tabla->softDeletes();
            //Claves foraneas $table->foreign('id_user')->references('id')->on('usuarios');
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
        Schema::drop('todos');
    }
}
