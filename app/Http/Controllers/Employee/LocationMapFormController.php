<?php

namespace App\Http\Controllers\Employee;
use Session;
use App\LocationMapForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationMapFormController extends Controller
{

    public function createStepOne(Request $request) {
        return view('employee.locationMapForm.location');
    }

    public function postCreateStepOne(Request $request){
        $validatedData = $request->validate([
            'geocode_location' => 'required',
            'location_name' => 'required',
            'type_of_area' => 'required',
            'general_description' => 'required',
            'is_area_safe' => 'required',
            'common_species_harvested' => 'required',
            'waterway' => 'required',
            'access_fee' => 'required',
            'hot_link' => 'required',
            'hot_link_image_video' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040'
        ]);

        $input=$request->all();

        if($request->file('hot_link_image_video')){
            $file= $request->file('hot_link_image_video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('LocationMapFormSubmittedData'), $filename);
            $input['hot_link_image_video']= $filename;
        }else{
            $input['hot_link_image_video']= "NULL";
        }
  
        Session::put([
            'geocode_location' => $request->geocode_location,
            'location_name' => $request->location_name,
            'type_of_area' => $request->type_of_area,
            'general_description' => $request->general_description,
            'is_area_safe' => $request->is_area_safe,
            'common_species_harvested' => $request->common_species_harvested,
            'waterway' => $request->waterway,
            'access_fee'=>$request->access_fee,
            'fee' => $request->fee,
            'hot_link'=>$request->hot_link,
            'hot_link_image_video'=>$input['hot_link_image_video'],
        ]);

        return redirect()->route('employee.locationmapform.create.step.two');
    }
    public function createStepTwo(Request $request) {
        return view('employee.locationMapForm.fishing');
    }

    public function postCreateStepTwo(Request $request){
        $validatedData = $request->validate([
            'bank_access' => 'required_without_all',
            'fish_attractors' => 'required',
            'species' => 'required',
            'fish_cleaning_station' => 'required',
            'dock' => 'required',
            'applicable_image_video_fishing' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
        ]);

        $input = $request->all();
        
        if($request->file('applicable_image_video_fishing')){
            $file= $request->file('applicable_image_video_fishing');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('LocationMapFormSubmittedData'), $filename);
            $input['applicable_image_video_fishing']= $filename;
        }else{
             $input['applicable_image_video_fishing']= "NULL";
        }
        
        $input['bank_access'] = $request->input('bank_access');

        Session::put([
            'bank_access' => $input['bank_access'],
            'fish_attractors' => $request->fish_attractors,
            'description_of_attractor' => $request->description_of_attractor,
            'species' => $request->species,
            'fish_cleaning_station' => $request->fish_cleaning_station,
            'dock' => $request->dock,
            'courtesy_dock_numbers' => $request->courtesy_dock_numbers,
            'applicable_link_fishing'=>$request->applicable_link_fishing,
            'applicable_image_video_fishing'=>$input['applicable_image_video_fishing'],
            'fishing_rating'=>$request->rating
        ]);

        return redirect()->route('employee.locationmapform.create.step.three');
    }

    public function createStepThree() {
        return view('employee.locationMapForm.parking');
    }

    public function postCreateStepThree(Request $request){
         $validatedData = $request->validate([
            'surface' => 'required_without_all',
            'spaces' => 'required_without_all',
            'trailer_spaces' => 'required',
            'handicap_spaces' => 'required',
            'lighted_parking' => 'required',
            'applicable_image_video_parking' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040'
        ]);

        $input=$request->all();

        if($request->file('applicable_image_video_parking')){
            $file= $request->file('applicable_image_video_parking');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('LocationMapFormSubmittedData'), $filename);
            $input['applicable_image_video_parking']= $filename;
        }else{
             $input['applicable_image_video_parking']= "NULL";
        }

        $input['surface'] = $request->input('surface');
        $input['spaces'] = $request->input('spaces');

        Session::put([
            'surface' => $input['surface'],
            'spaces' => $input['surface'],
            'trailer_spaces' => $request->trailer_spaces,
            'trailer_spaces_numbers' => $request->trailer_spaces_numbers,
            'handicap_spaces' => $request->handicap_spaces,
            'handicap_spaces_numbers' => $request->handicap_spaces_numbers,
            'lighted_parking' => $request->lighted_parking,
            'lighted_parking_type'=>$request->lighted_parking_type,
            'applicable_link_parking'=>$request->applicable_link_parking,
            'applicable_image_video_parking'=>$input['applicable_image_video_parking'],
        ]);

        return redirect()->route('employee.locationmapform.create.step.four');
    }

    public function createStepFour() {
        return view('employee.locationMapForm.hours');
    }

    public function postCreateStepFour(Request $request){
       $validatedData = $request->validate([
            'access_24' => 'required',
            'sunrise_to_sunset_access' => 'required_without_all',
            'open_year_round' => 'required',
            'closed_months' => 'required',
            'often_hours_of_use' => 'required',
            'applicable_link_hours' => 'required',
            'applicable_image_video_hours' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040'
        ]);

        $input=$request->all();        

        if($request->file('applicable_image_video_hours')){
            $file= $request->file('applicable_image_video_hours');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('LocationMapFormSubmittedData'), $filename);
            $input['applicable_image_video_hours']= $filename;
        }else{
            $input['applicable_image_video_hours']= "NULL";
        }

        $input['sunrise_to_sunset_access'] = $request->input('sunrise_to_sunset_access');

        Session::put([
            'access_24' => $request->access_24,
            'sunrise_to_sunset_access' => $input['sunrise_to_sunset_access'],
            'specify_sunrise_to_sunset_access' => $request->specify_sunrise_to_sunset_access,
            'open_year_round' => $request->open_year_round,
            'open_year_round_specify' => $request->open_year_round_specify,
            'closed_months'=>$request->closed_months,
            'closed_months_specify'=>$request->closed_months_specify,
            'often_hours_of_use'=>$request->often_hours_of_use,
            'often_hours_of_use_specify'=>$request->often_hours_of_use_specify,
            'applicable_link_hours'=>$request->applicable_link_hours,
            'applicable_image_video_hours'=>$input['applicable_image_video_hours'],
        ]);

        return redirect()->route('employee.locationmapform.create.step.five');
    }

    public function createStepFive() {
        return view('employee.locationMapForm.boat');
    }

    public function postCreateStepFive(Request $request){
        $validatedData = $request->validate([
            'number_of_ramps' => 'required_without_all',
            'number_of_lanes' => 'required_without_all',
            'ramp_surface' => 'required_without_all',
            'restrooms' => 'required',
            'applicable_link_boat' => 'required',
        ]);

        $input=$request->all();        

        if($request->file('applicable_image_video_boat')){
            $file= $request->file('applicable_image_video_boat');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('LocationMapFormSubmittedData'), $filename);
            $input['applicable_image_video_boat']= $filename;
        }else{
            $input['applicable_image_video_boat']= "NULL";
        }

        $input['number_of_ramps'] = $request->input('number_of_ramps');
        $input['number_of_lanes'] = $request->input('number_of_lanes');
        $input['ramp_surface'] = $request->input('ramp_surface');

       Session::put([
            'number_of_ramps' =>  $input['number_of_ramps'],
            'number_of_lanes' => $input['number_of_lanes'],
            'ramp_surface' => $input['ramp_surface'],
            'ramp_surface_other_specify' => $request->ramp_surface_other_specify,
            'restrooms' => $request->restrooms,
            'applicable_link_boat' => $request->applicable_link_boat,
            'applicable_image_video_boat' => $input['applicable_image_video_boat'],
            'boat_ramp_access_rating' => $request->rating,
        ]);

        return redirect()->route('employee.locationmapform.create.step.six');
    }

    public function createStepSix() {
        return view('employee.locationMapForm.area');
    }

    public function postCreateStepSix(Request $request){
        $validatedData = $request->validate([
            'is_camping_allowed' => 'required',
            'allowed_camping_type' => 'required_without_all',
            'is_electricity' => 'required',
            'is_water' => 'required',
            'picnic_area' => 'required',
            'picnic_area_amenities' => 'required_without_all',
            'family_area_recreation' => 'required',
            'family_area_recreation_type' => 'required_without_all',
        ]);

        $input['allowed_camping_type'] = $request->input('allowed_camping_type');
        $input['picnic_area_amenities'] = $request->input('picnic_area_amenities');
        $input['family_area_recreation_type'] = $request->input('family_area_recreation_type');

        Session::put([
            'is_camping_allowed' => $request->is_camping_allowed,
            'allowed_camping_type' => $input['allowed_camping_type'],
            'is_electricity' => $request->is_electricity,
            'is_water' => $request->is_water,
            'picnic_area' => $request->picnic_area,
            'picnic_area_amenities' => $input['picnic_area_amenities'],
            'family_area_recreation' => $request->family_area_recreation,
            'family_area_recreation_type' => $input['family_area_recreation_type'],
            'area_amenities_rating' => $request->rating,
        ]);

        $LocationMap = new LocationMapForm;
        $allSessions=session()->all();
        // dd($allSessions);

        // Location Form Session
        $LocationMap->geocode_location  =$allSessions['geocode_location'];
        $LocationMap->location_name =$allSessions['location_name'];
        $LocationMap->type_of_area =$allSessions['type_of_area'];
        $LocationMap->general_description =$allSessions['general_description'];
        $LocationMap->is_area_safe =$allSessions['is_area_safe'];
        $LocationMap->common_species_harvested =$allSessions['common_species_harvested'];
        $LocationMap->waterway =$allSessions['waterway'];
        $LocationMap->fee  =$allSessions['fee'];
        $LocationMap->access_fee=$allSessions['access_fee'];
        $LocationMap->hot_link=$allSessions['hot_link'];
        $LocationMap->hot_link_image_video=$allSessions['hot_link_image_video'];

        // Fishing Form Session
        $LocationMap->bank_access  =implode(" " ,$allSessions['bank_access']);
        $LocationMap->fish_attractors =$allSessions['fish_attractors'];
        $LocationMap->description_of_attractor =$allSessions['description_of_attractor'];
        $LocationMap->species =$allSessions['species'];
        $LocationMap->fish_cleaning_station =$allSessions['fish_cleaning_station'];
        $LocationMap->dock =$allSessions['dock'];
        $LocationMap->courtesy_dock_numbers  =$allSessions['courtesy_dock_numbers'];
        $LocationMap->applicable_link_fishing=$allSessions['applicable_link_fishing'];
        $LocationMap->applicable_image_video_fishing=$allSessions['applicable_image_video_fishing'];
        $LocationMap->fishing_rating=$allSessions['fishing_rating'];

        // Parking Form Session
        $LocationMap->surface  =implode(" " ,$allSessions['surface']);
        $LocationMap->spaces =implode(" " ,$allSessions['spaces']);
        $LocationMap->trailer_spaces =$allSessions['trailer_spaces'];
        $LocationMap->trailer_spaces_numbers =$allSessions['trailer_spaces_numbers'];
        $LocationMap->handicap_spaces =$allSessions['handicap_spaces'];
        $LocationMap->handicap_spaces_numbers =$allSessions['handicap_spaces_numbers'];
        $LocationMap->lighted_parking  =$allSessions['lighted_parking'];
        $LocationMap->lighted_parking_type=$allSessions['lighted_parking_type'];
        $LocationMap->applicable_link_parking=$allSessions['applicable_link_parking'];
        $LocationMap->applicable_image_video_parking=$allSessions['applicable_image_video_parking'];
        
        // Hours Form Session
        $LocationMap->access_24  =$allSessions['access_24'];
        $LocationMap->sunrise_to_sunset_access =implode(" " ,$allSessions['sunrise_to_sunset_access']);
        $LocationMap->specify_sunrise_to_sunset_access =$allSessions['specify_sunrise_to_sunset_access'];
        $LocationMap->open_year_round =$allSessions['open_year_round'];
        $LocationMap->open_year_round_specify =$allSessions['open_year_round_specify'];
        $LocationMap->closed_months =$allSessions['closed_months'];
        $LocationMap->closed_months_specify  =$allSessions['closed_months_specify'];
        $LocationMap->often_hours_of_use=$allSessions['often_hours_of_use'];
        $LocationMap->often_hours_of_use_specify=$allSessions['often_hours_of_use_specify'];
        $LocationMap->applicable_link_hours=$allSessions['applicable_link_hours'];
        $LocationMap->applicable_image_video_hours=$allSessions['applicable_image_video_hours'];
        
        // Boat Form Session
        $LocationMap->number_of_ramps  =implode(" " ,$allSessions['number_of_ramps']);
        $LocationMap->number_of_lanes =implode(" " ,$allSessions['number_of_lanes']);
        $LocationMap->ramp_surface =implode(" " ,$allSessions['ramp_surface']);
        $LocationMap->ramp_surface_other_specify =$allSessions['ramp_surface_other_specify'];
        $LocationMap->restrooms =$allSessions['restrooms'];
        $LocationMap->applicable_link_boat =$allSessions['applicable_link_boat'];
        $LocationMap->applicable_image_video_boat  =$allSessions['applicable_image_video_boat'];
        $LocationMap->boat_ramp_access_rating  =$allSessions['boat_ramp_access_rating'];
        
        // Area Form Session
        $LocationMap->is_camping_allowed  =$allSessions['is_camping_allowed'];
        $LocationMap->allowed_camping_type =implode(" " ,$allSessions['allowed_camping_type']);
        $LocationMap->is_electricity =$allSessions['is_electricity'];
        $LocationMap->is_water =$allSessions['is_water'];
        $LocationMap->picnic_area =$allSessions['picnic_area'];
        $LocationMap->public_area_amenities =implode(" " ,$allSessions['picnic_area_amenities']);
        $LocationMap->family_area_recreation  =$allSessions['family_area_recreation'];
        $LocationMap->family_area_recreation_type=implode(" " ,$allSessions['family_area_recreation_type']);
        $LocationMap->area_amenities_rating=$allSessions['area_amenities_rating'];


        $LocationMap->save();
        
        return redirect()->route('employee');
    }
}
