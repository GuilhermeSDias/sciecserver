<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->longText('descricao');
            $table->boolean('status');
            $table->time('hora');
            $table->longText('local');
            $table->integer('qtd_inscritos');
            $table->integer('cod_inscritos');
            $table->dateTime('data_inicio');
            $table->dateTime('data_conclusao');
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('events')->onDelete('cascade');
            $table->integer('id_tipo_atividade')->unsigned();
            $table->foreign('id_tipo_atividade')->references('id')->on('types_activities')->onDelete('cascade');
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
        Schema::dropIfExists('activities');
    }
}
