<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('note');
            $table->string('commentaire')->nullable();
            $table->integer('demande_id')->unsigned();
            $table->integer('professionnel_id')->unsigned();

            $table->timestamps();

            $table->foreign('demande_id')->references('id')->on('demandes')->onDelete('cascade');
            $table->foreign('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avis');
    }
}
