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
            $table->integer("id_role")->unsigned()->nullable();
            $table->foreign("id_role")->references("id")->on("roles")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("id_type_utilisateur")->unsigned()->nullable();
            $table->foreign("id_type_utilisateur")->references("id")->on("type_utlisateurs")->onDelete("cascade")->onUpdate("cascade");
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
};
