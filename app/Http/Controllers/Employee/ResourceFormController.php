<?php

namespace App\Http\Controllers\Employee;
use App\ResourceForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourceFormController extends Controller
{

    public function create() {
        return view('employee.resourceForm.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'type' => 'required', 
            'geocode_location' => 'required', 
            'google_maps_image_video' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            'general_description' => 'required',
            'sell_baits' => 'required', 
            'sell' => 'required_without_all',
            'terminal_tackle' => 'required', 
            'have_drinks' => 'required', 
            'sell_ice' => 'required', 
            'have_grade' => 'required', 
            'regular_fuel' => 'required',
            'fishing_boats' => 'required', 
            'pontoon_boats' => 'required', 
            'kayaks' => 'required', 
            'motor_services' => 'required', 
            'boat_parts' => 'required', 
            'accessories' => 'required', 
            'restrooms' => 'required', 
            'resources' => 'required', 
            'applicable_image_video' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040', 
        ]);
        
        $input = $request->all();
        $input['sell'] = $request->input('sell');

        if($request->file('google_maps_image_video')){
            $file= $request->file('google_maps_image_video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('ResourceFormSubmittedData'), $filename);
            $input['google_maps_image_video']= $filename;
        }

        if($request->file('applicable_image_video')){
            $file= $request->file('applicable_image_video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('ResourceFormSubmittedData'), $filename);
            $input['applicable_image_video']= $filename;
        }

        ResourceForm::create($input);
        return redirect()->back();
    }
}
