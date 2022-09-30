<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationMapForm extends Model
{
    protected $fillable = ['geocode_location', 'location_name', 'type_of_area','general_description','is_area_safe', 'common_species_harvested','waterway','access_fee','fee','hot_link','hot_link_image_video','bank_access','fish_attractors','description_of_attractor','species','fish_cleaning_station','dock','courtesy_dock_numbers','applicable_link_fishing','applicable_image_video_fishing','fishing_rating','surface','spaces','trailer_spaces','trailer_spaces_numbers','handicap_spaces','handicap_spaces_numbers','lighted_parking','lighted_parking_type','applicable_link_parking','applicable_image_video_parking','access_24','sunrise_to_sunset_access','specify_sunrise_to_sunset_access','open_year_round','open_year_round_specify','closed_months','closed_months_specify','often_hours_of_use','often_hours_of_use_specify','applicable_link_hours','applicable_image_video_hours','number_of_ramps','number_of_lanes','ramp_surface','ramp_surface_other_specify','restrooms','applicable_link_boat','applicable_image_video_boat','boat_ramp_surface_rating','is_camping_allowed','allowed_camping_type','is_electricity','is_water','picnic_area','pinic_area_amenities','family_area_recreation','family_area_recreation_type','area_amenities_rating'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function employee() {
        return $this->belongsTo('App\Employee');
    }

    public function setBankAccessAttribute($value)
    {
        $this->attributes['bank_access'] = json_encode($value);
    }
   
    public function setSurfaceAttribute($value)
    {
        $this->attributes['surface'] = json_encode($value);
    }

    public function setSpacesAttribute($value)
    {
        $this->attributes['spaces'] = json_encode($value);
    }

    public function setSunriseToSunsetAccessAttribute($value)
    {
        $this->attributes['sunrise_to_sunset_access'] = json_encode($value);
    }

    public function setNumberOfRampsAttribute($value)
    {
        $this->attributes['number_of_ramps'] = json_encode($value);
    }

    public function setNumberOfLanesAttribute($value)
    {
        $this->attributes['number_of_lanes'] = json_encode($value);
    }

    public function setRampSurfaceAttribute($value)
    {
        $this->attributes['ramp_surface'] = json_encode($value);
    }

    public function setAllowedCampingTypeAttribute($value)
    {
        $this->attributes['allowed_camping_type'] = json_encode($value);
    }

    public function setPicnicAreaAmenitiesAttribute($value)
    {
        $this->attributes['pinic_area_amenities'] = json_encode($value);
    }

    public function setFamilyAreaRecreationTypeAttribute($value)
    {
        $this->attributes['family_area_recreation_type'] = json_encode($value);
    }

}
