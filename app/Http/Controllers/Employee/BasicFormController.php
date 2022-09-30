<?php

namespace App\Http\Controllers\Employee;
use App\BasicForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicFormController extends Controller
{

    public function create() {
        return view('employee.basicForm.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'location' => 'required',
            'date' => 'required',
            'weather_condition' => 'required_without_all',
            'water_condition' => 'required',
            'fish_species' => 'required',
            'depth' => 'required',
            'structure' => 'required_without_all',
            'cover' => 'required_without_all',
            'lures_bait' => 'required',
            'tactics' => 'required',
            'patterns_to_look_for' => 'required',
        ]);
        
        $input=$request->all();
        $input['weather_condition'] = $request->input('weather_condition');
        $input['structure'] = $request->input('structure');
        $input['cover'] = $request->input('cover');

        BasicForm::create($input);
        
        return redirect()->back();
    }
}
