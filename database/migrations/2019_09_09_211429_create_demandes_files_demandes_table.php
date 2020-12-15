<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesFilesDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_files_demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('demande_file_id')->unsigned();
            $table->integer('demande_id')->unsigned();
            $table->timestamps();

            $table->foreign('demande_file_id')->references('id')->on('demande_files')->onDelete('cascade');
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
        Schema::dropIfExists('demande_files_demandes');
    }
}
