<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero');
            $table->integer('statut');
            $table->integer('creancier_id')->unsigned();
            $table->integer('debiteur_id')->unsigned();

            $table->foreign('creancier_id')->references('id')->on('creanciers')->onDelete('cascade');
            $table->foreign('debiteur_id')->references('id')->on('debiteurs')->onDelete('cascade');
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
        Schema::dropIfExists('billings');
    }
}
