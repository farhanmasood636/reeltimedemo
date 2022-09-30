<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_forms', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('date');
            $table->string('weather_condition');
            $table->string('water_condition');
            $table->string('fish_species');
            $table->string('depth');
            $table->string('structure');
            $table->string('cover');
            $table->string('lures_bait');
            $table->string('tactics');
            $table->string('patterns_to_look_for');
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
        Schema::dropIfExists('basic_forms');
    }
}
