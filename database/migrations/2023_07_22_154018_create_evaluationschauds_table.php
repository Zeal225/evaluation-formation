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
        Schema::create('evaluationschauds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_formation')->unsigned();
            $table->integer('id_formateur')->unsigned();
            $table->integer('id_formation_utilisateur')->unsigned();
            $table->integer('id_cabinet')->unsigned();
            $table->integer('id_utilisateur')->unsigned();

            $table->foreign('id_formation')->references('id_formation')->on('formations')->onDelete('cascade');
            $table->foreign('id_formateur')->references('id')->on('formateurs')->onDelete('cascade');
            $table->foreign('id_formation_utilisateur')->references('id')->on('formation_utilisateur')->onDelete('cascade');
            $table->foreign('id_cabinet')->references('id')->on('cabinets')->onDelete('cascade');
            $table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluationschauds');
    }
};
