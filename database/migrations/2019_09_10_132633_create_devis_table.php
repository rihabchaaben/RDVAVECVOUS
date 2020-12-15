<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('proposition_id')->unsigned();
            $table->integer('professionnel_id')->unsigned();
            $table->float('montant');
            $table->float('tax');
            $table->date('valable_until');
            $table->string('condition_paiement');
            $table->integer('status');


            $table->timestamps();

            $table->foreign('proposition_id')->references('id')->on('propositions')->onDelete('cascade');
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
        Schema::dropIfExists('devis');
    }
}
