<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondents_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('respondents_id')->unsigned();
            $table->foreign('respondents_id')->references('id')->on('respondens')->onDelete('cascade');
            $table->integer('respondents_form_id')->unsigned();
            $table->foreign('respondents_form_id')->references('id')->on('responden_forms');
            $table->integer('score');
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
        Schema::dropIfExists('respondents_details');
    }
}
