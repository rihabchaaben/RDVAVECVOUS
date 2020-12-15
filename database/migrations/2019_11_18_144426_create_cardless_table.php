<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardlessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardless', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mandate');
            $table->integer('professionnel_id')->unsigned();
            $table->foreign('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
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
        Schema::dropIfExists('cardless');
    }
}
