<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceForm extends Model
{
    protected $fillable = ['type','geocode_location','google_maps_image_video','general_description','sell_baits','sell','terminal_tackle','have_drinks', 'sell_ice','have_grade','regular_fuel','fishing_boats','pontoon_boats','kayaks','motor_services','boat_parts','accessories','restrooms','resources','applicable_link','applicable_image_video'];

    protected $dates = ['created_at', 'updated_at'];
    public function employee() {
        return $this->belongsTo('App\Employee');
    }
    public function setSellAttribute($value)
    {
        $this->attributes['sell'] = json_encode($value);
    }
}
