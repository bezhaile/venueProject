<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VenuesId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venuesPhoto', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('imagesOfVenues_id')->unsigned();
            $table->foreign('imagesOfVenues_id')
            ->references('id')->on('imagesOfVenues')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('Uploade_Images')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venuesPhoto');
    }
}
