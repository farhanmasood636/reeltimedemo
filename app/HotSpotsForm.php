<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotSpotsForm extends Model
{
    protected $fillable = ['geocode_location','geocode_location_link','geocode_location_image_video','species','description_of_spot','applicable_link','applicable_image_video'];

    protected $dates = ['created_at', 'updated_at'];
    public function employee() {
        return $this->belongsTo('App\Employee');
    }
   
}
