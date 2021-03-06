<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_events', function (Blueprint $table) {

            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');

            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('events')->onDelete('cascade');

            $table->integer('id_articles')->unsigned();
            $table->foreign('id_articles')->references('id')->on('articles')->onDelete('cascade');

            $table->integer('id_participation')->unsigned();
            $table->foreign('id_participation')->references('id')->on('participations')->onDelete('cascade');

            $table->boolean('status');
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
        Schema::dropIfExists('users_events');
    }
}
