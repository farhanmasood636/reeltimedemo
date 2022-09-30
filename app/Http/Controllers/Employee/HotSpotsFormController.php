<?php

namespace App\Http\Controllers\Employee;
use App\HotSpotsForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotSpotsFormController extends Controller
{

    public function create() {
        return view('employee.hotSpotsForm.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'geocode_location' => 'required', 
            'geocode_location_image_video' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            'species' => 'required',
            'description_of_spot' => 'required',
            'applicable_image_video' => 'file|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040', 
        ]);
        
        $input = $request->all();

        if($request->file('geocode_location_image_video')){
            $file= $request->file('geocode_location_image_video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('HotSpotsFormSubmittedData'), $filename);
            $input['geocode_location_image_video']= $filename;
        }

        if($request->file('applicable_image_video')){
            $file= $request->file('applicable_image_video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('HotSpotsFormSubmittedData'), $filename);
            $input['applicable_image_video']= $filename;
        }

        HotSpotsForm::create($input);
        return redirect()->back();
    }
}
