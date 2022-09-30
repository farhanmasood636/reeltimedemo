<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremiumForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premium_forms', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->date('date');
            $table->string('weather_condition');
            $table->string('water_condition');
            $table->string('water_condition_other_features')->nullable();
            $table->string('species');
            $table->string('depth');
            $table->string('structure');
            $table->string('cover');
            $table->string('lures_bait');
            $table->string('tactics');
            $table->string('gps_locations');
            $table->string('hottest_bites_in_the_area');
            $table->string('tips_and_tricks_to_increase_catches');
            $table->string('special_tactics');
            $table->string('patterns_to_look_for');
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
        Schema::dropIfExists('premium_forms');
    }
}
