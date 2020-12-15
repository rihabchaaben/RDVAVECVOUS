<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionnels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom')->nullable();
            $table->string('nom_societe')->nullable();
            $table->string('adresse')->nullable();
            $table->string('cp')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('site')->nullable();
            $table->string('description')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('ville_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionnels');
    }
}
