<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnivestetiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univesteties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prflimg');
            $table->string('img');
            $table->string('header');
            $table->text('desc');
            $table->string('price');
            $table->string('year');
            $table->boolean('type');
            $table->unsignedBigInteger('country_id')->index();
            $table->foreign('country_id')->references('id')->on('countries');
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
        Schema::dropIfExists('univesteties');
    }
}
