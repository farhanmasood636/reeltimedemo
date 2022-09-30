<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicForm extends Model
{
    protected $fillable = ['location', 'date','weather_condition','water_condition', 'fish_species', 'depth', 'structure', 'cover','lures_bait','tactics','patterns_to_look_for'];
    protected $dates = ['created_at', 'updated_at'];
    public function employee() {
        return $this->belongsTo('App\Employee');
    }
    public function setWeatherConditionAttribute($value)
    {
        $this->attributes['weather_condition'] = json_encode($value);
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
