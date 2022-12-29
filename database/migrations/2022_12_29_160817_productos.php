<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->Integer('name_id')->unsigned();
            $table->foreign('name_id')->references('id')->on('codigos')->onDelete('cascade');
            $table->Integer('bodega_id')->unsigned();
            $table->foreign('bodega_id')->references('id')->on('bodegas')->onDelete('cascade');
            $table->Integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->timestamps();
            $table->string('ubicacion');
            $table->Integer('conteo1');
            $table->Integer('conteo2');
            $table->Integer('deferencia12');
            $table->Integer('conteo3');
        
            

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
}
