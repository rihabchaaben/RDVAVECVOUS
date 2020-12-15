<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('option_question_id')->unsigned();
            $table->integer('proposition_id')->unsigned();
            $table->timestamps();

            $table->foreign('option_question_id')->references('id')->on('option_questions')->onDelete('cascade');
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
        Schema::dropIfExists('answers');
    }
}
