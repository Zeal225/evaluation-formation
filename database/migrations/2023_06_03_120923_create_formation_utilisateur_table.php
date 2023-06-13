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
        Schema::create('formation_utilisateur', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_utilisateur');
            $table->unsignedBigInteger('id_formation');
            $table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_formation')->references('id_formation')->on('formations')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->string('lieu_formation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation_utilisateur');
    }
};
