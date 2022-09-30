<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PremiumForm extends Model
{
    protected $fillable = ['location', 'date','weather_condition','water_condition','water_condition_other_features', 'species', 'depth', 'structure', 'cover','lures_bait','tactics','patterns_to_look_for','gps_locations','hottest_bites_in_the_area','tips_and_tricks_to_increase_catches','special_tactics','applicable_link','applicable_image_video'];
    protected $dates = ['created_at', 'updated_at'];
    public function employee() {
        return $this->belongsTo('App\Employee');
    }
    public function setWeatherConditionAttribute($value)
    {
        $this->attributes['weather_condition'] = json_encode($value);
    }
    public function setWaterConditionAttribute($value)
    {
        $this->attributes['water_condition'] = json_encode($value);
    }
    public function setStructureAttribute($value)
    {
        $this->attributes['structure'] = json_encode($value);
    }
    public function setCoverAttribute($value)
    {
        $this->attributes['cover'] = json_encode($value);
    }
}
