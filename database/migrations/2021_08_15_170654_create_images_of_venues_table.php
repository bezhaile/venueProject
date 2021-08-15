<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('Name_of_Venue')->nullable();
            $table->text('location')->nullable();
            $table->text('Number_of_sits')->nullable();
            $table->string('Uploade_Images')->nullable();
            // $table->string('url');
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
