<?php

namespace App\Http\Controllers\Employee;
use App\PremiumForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PremiumFormController extends Controller
{

    public function create() {
        return view('employee.premiumForm.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'location' => 'required',
            'date' => 'required',
            'weather_condition'=>'required_without_all',
            'water_condition'=>'required_without_all',
            'species' => 'required',
            'depth' => 'required',
            'structure' => 'required_without_all',
            'cover' => 'required_without_all',
            'lures_bait' => 'required',
            'tactics' => 'required',
            'patterns_to_look_for' => 'required',
            'gps_locations' => 'required',
            'hottest_bites_in_the_area' => 'required',
            'tips_and_tricks_to_increase_catches' => 'required',
            'special_tactics' => 'required',
        ]);
        
        $input = $request->all();
        $input['weather_condition'] = $request->input('weather_condition');
        $input['water_condition'] = $request->input('water_condition');
        $input['structure'] = $request->input('structure');
        $input['cover'] = $request->input('cover');

        if($request->file('applicable_image_video')){
            $file= $request->file('applicable_image_video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('PremiumFormSubmittedData'), $filename);
            $input['applicable_image_video']= $filename;
        }

        PremiumForm::create($input);

        return redirect()->back();
    }
}
