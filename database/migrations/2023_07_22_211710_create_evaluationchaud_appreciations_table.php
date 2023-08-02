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
        Schema::create('evaluationchaud_appreciations', function (Blueprint $table) {
            $table->id();
            $table->integer('id_evaluationchaud')->unsigned();
            $table->string('appreciation')->nullable();
            $table->string('evaluation')->nullable();
            $table->double('note')->nullable();
            $table->timestamps();

            $table->foreign('id_evaluationchaud')->references('id')->on('evaluationschauds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluationchaud_appreciations');
    }
};
