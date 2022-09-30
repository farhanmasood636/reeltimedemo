<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotSpotsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hot_spots_forms', function (Blueprint $table) {
            $table->id();
            $table->string('geocode_location');
            $table->string('geocode_location_link')->nullable();
            $table->string('geocode_location_image_video')->nullable();
            $table->string('species');
            $table->string('description_of_spot');
            $table->string('applicable_link')->nullable();
            $table->string('applicable_image_video')->nullable();
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
        Schema::dropIfExists('hot_spots_forms');
    }
}
