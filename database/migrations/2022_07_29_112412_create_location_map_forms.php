<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationMapForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_map_forms', function (Blueprint $table) {
            $table->id();
            // Location Form
            $table->string('geocode_location');
            $table->string('location_name');
            $table->string('type_of_area');
            $table->string('general_description');
            $table->string('is_area_safe');
            $table->string('common_species_harvested');
            $table->string('waterway');
            $table->string('access_fee');
            $table->string('fee')->nullable();
            $table->string('hot_link');
            $table->string('hot_link_image_video');
            // Fishing Form
            $table->string('bank_access');
            $table->string('fish_attractors');
            $table->string('description_of_attractor')->nullable();
            $table->string('species');
            $table->string('fish_cleaning_station');
            $table->string('dock');
            $table->string('courtesy_dock_numbers')->nullable();
            $table->string('applicable_link_fishing');
            $table->string('applicable_image_video_fishing');
            $table->string('fishing_rating')->nullable();
            // Parking Form
            $table->string('surface');
            $table->string('spaces');
            $table->string('trailer_spaces');
            $table->string('trailer_spaces_numbers')->nullable();
            $table->string('handicap_spaces');
            $table->string('handicap_spaces_numbers')->nullable();
            $table->string('lighted_parking');
            $table->string('lighted_parking_type')->nullable();
            $table->string('applicable_link_parking');
            $table->string('applicable_image_video_parking');
            // Hour Form
            $table->string('access_24');
            $table->string('sunrise_to_sunset_access');
            $table->string('specify_sunrise_to_sunset_access')->nullable();
            $table->string('open_year_round');
            $table->string('open_year_round_specify')->nullable();
            $table->string('closed_months');
            $table->string('closed_months_specify')->nullable();
            $table->string('often_hours_of_use');
            $table->string('often_hours_of_use_specify')->nullable();
            $table->string('applicable_link_hours');
            $table->string('applicable_image_video_hours');
            // Boat Form
            $table->string('number_of_ramps');
            $table->string('number_of_lanes');
            $table->string('ramp_surface');
            $table->string('ramp_surface_other_specify')->nullable();
            $table->string('restrooms');
            $table->string('applicable_link_boat');
            $table->string('applicable_image_video_boat');
            $table->string('boat_ramp_access_rating')->nullable();
            // Area Form
            $table->string('is_camping_allowed');
            $table->string('allowed_camping_type');
            $table->string('is_electricity');
            $table->string('is_water');
            $table->string('picnic_area');
            $table->string('public_area_amenities');
            $table->string('family_area_recreation');
            $table->string('family_area_recreation_type');
            $table->string('area_amenities_rating')->nullable();
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
        Schema::dropIfExists('location_map_forms');
    }
}
