<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourceFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_forms', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('geocode_location');
            $table->string('google_maps_image_video')->nullable();
            $table->string('general_description');
            $table->string('sell_baits');
            $table->string('sell');
            $table->string('terminal_tackle');
            $table->string('have_drinks');
            $table->string('sell_ice');
            $table->string('have_grade');
            $table->string('regular_fuel');
            $table->string('fishing_boats');
            $table->string('pontoon_boats');
            $table->string('kayaks');
            $table->string('motor_services');
            $table->string('boat_parts');
            $table->string('accessories');
            $table->string('restrooms');
            $table->string('resources');
            $table->string('applicable_link');
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
        Schema::dropIfExists('resource_forms');
    }
}
