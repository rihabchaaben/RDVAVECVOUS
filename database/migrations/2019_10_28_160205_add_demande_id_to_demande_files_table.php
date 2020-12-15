<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDemandeIdToDemandeFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demande_files', function (Blueprint $table) {
            $table->integer('demande_id')->unsigned();
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
        Schema::table('demande_files', function (Blueprint $table) {
            //
        });
    }
}
