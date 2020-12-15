<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendeurProfessionnel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendeur_professionnel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('professionnel_id')->unsigned();
            $table->integer('vendeur_id')->unsigned();
            $table->timestamps();

            $table->foreign('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
            $table->foreign('vendeur_id')->references('id')->on('vendeurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendeur_professionnel');
    }
}
