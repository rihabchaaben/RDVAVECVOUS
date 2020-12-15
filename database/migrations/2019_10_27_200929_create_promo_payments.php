<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('professionnel_id')->unsigned();
            $table->integer('proposition_id')->unsigned();
            $table->timestamps();

            $table->foreign('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
            $table->foreign('proposition_id')->references('id')->on('propositions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo_payments');
    }
}
