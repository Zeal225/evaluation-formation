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
        Schema::table('users', function (Blueprint $table) {
                $table->string('matricule_utilisateur')->unique()->default(random_int(100000, 999999));
                $table->string('nom_utilisateur')->nullable();
                $table->string('prenom_utilisateur')->nullable();
                $table->string('departement_utilisateur')->nullable();
                $table->string('service_utilisateur')->nullable();
                $table->string('fonction_utilisateur')->nullable();
                $table->string('login_utilisateur')->unique()->nullable();
                $table->string('telephone_utilisateur')->nullable();
                $table->string('agence_utilisateur')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

        });
    }
};
