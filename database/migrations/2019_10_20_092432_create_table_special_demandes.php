<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSpecialDemandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('professionnel_id')->unsigned();
            $table->integer('demande_id')->unsigned();
            $table->timestamps();

            $table->foreign('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
            $table->foreign('demande_id')->references('id')->on('demandes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_demandes');
    }
}
