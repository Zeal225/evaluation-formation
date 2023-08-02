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
        Schema::create('evaluationfroids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_formation');
            $table->unsignedBigInteger('id_formation_utilisateur');
            $table->unsignedBigInteger('id_utilisateur');
            $table->boolean('objectif_atteint')->nullable();
            $table->text('commentaire')->nullable();
            $table->integer('note_globale')->nullable();
            $table->foreign('id_formation')->references('id_formation')->on('formations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_formation_utilisateur')->references('id')->on('formation_utilisateur')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('evaluationfroids');
    }
};
