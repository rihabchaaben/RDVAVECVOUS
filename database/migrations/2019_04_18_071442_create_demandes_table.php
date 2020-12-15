<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('adresse');
            $table->string('cp');
            $table->string('description');
            $table->string('fichier');
            $table->integer('status');
            $table->integer('type_devis')->nullable();
            $table->string('type_commentaire')->nullable();
            $table->integer('ville_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->integer('demandeur_id')->unsigned();
            $table->timestamps();

            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categorie')->onDelete('cascade');
            $table->foreign('demandeur_id')->references('id')->on('demandeur')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
