<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesHasProfessionnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_professionnel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('professionnel_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->timestamps();

            $table->foreign('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_has_professionnels');
    }
}
