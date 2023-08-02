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
        Schema::create('evaluationfroid_appreciations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_evaluationfroid');
            $table->unsignedBigInteger('id_objectif');
            $table->unsignedBigInteger('id_utilisateur');
            $table->integer('note');
            $table->foreign('id_evaluationfroid')->references('id')->on('evaluationfroids')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_objectif')->references('id')->on('objectifs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('evaluationfroid_appreciations');
    }
};
