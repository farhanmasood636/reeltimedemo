<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['user_id', 'first_name', 'last_name', 'gender'];
    public function user() {
        return $this->belongsTo('App\User');
    }

}
