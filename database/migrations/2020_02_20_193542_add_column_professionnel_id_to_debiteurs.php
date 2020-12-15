<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProfessionnelIdToDebiteurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('debiteurs', function (Blueprint $table) {
            $table->integer('professionnel_id')->unsigned();
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
        Schema::table('debiteurs', function (Blueprint $table) {
            //
        });
    }
}
