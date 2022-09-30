<?php

namespace App\Http\Controllers\Employee;

use App\User;
use App\Employee;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index() {
        $data = [
            'employee' => Auth::user()->employee
        ];
        return view('employee.index')->with($data);
    }

    public function profile() {
        $employee = Auth::user()->employee;
        $email=Auth::user()->whereId(Auth::user()->employee->user_id)->value('email');
        return view('employee.profile',compact('employee','email'));
    }

    public function profile_edit($employee_id) {
        $employee = Auth::user()->employee;
        Gate::authorize('employee-profile-access', intval($employee_id));
        return view('employee.profile-edit',compact('employee'));
    }

    public function profile_update(Request $request, $employee_id) {
        Gate::authorize('employee-profile-access', intval($employee_id));
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        $employee = Employee::findOrFail($employee_id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->gender = $request->gender;

        $user=User::findOrFail($employee->user_id);
        $user->name=$request->first_name.' '.$request->last_name;

        $employee->save();
        $user->save();
        $request->session()->flash('success', 'Your Profile Has Been Successfully Updated!');
        return redirect()->route('employee.profile');
    }
    public function reset_password() {
        return view('employee.reset-password');
    }

    public function update_password(Request $request) {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect('/employee');
    }
}
