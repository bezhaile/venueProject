<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesOfVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_of_venues', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Name of Venue')->nullable();
            $table->text('location')->nullable();
            $table->text('Number of sits')->nullable();
            $table->string('Uploade Images')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images_of_venues');
    }
}
