<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photography_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('detail');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category_sevices');
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
        Schema::dropIfExists('photography_services');
    }
}
