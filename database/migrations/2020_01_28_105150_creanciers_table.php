<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreanciersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creanciers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ics');
            $table->string('nom');
            $table->string('adress');
            $table->string('ville');
            $table->string('cp');
            $table->string('pays');
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
        Schema::dropIfExists('creanciers');
    }
}
