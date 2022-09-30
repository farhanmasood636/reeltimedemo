<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\BasicFormController;
use App\Http\Controllers\Employee\PremiumFormController;
use App\Http\Controllers\Employee\LocationMapFormController;
use App\Http\Controllers\Employee\ResourceFormController;
use App\Http\Controllers\Employee\HotSpotsFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(['auth','can:admin-access'])->group(function () {
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/reset-password', 'AdminController@reset_password')->name('reset-password');
    Route::post('/update-password', 'AdminController@update_password')->name('update-password');

    // Routes for employees //
    Route::get('/employees/list-employees', 'EmployeeController@index')->name('employees.index');
    Route::get('/employees/add-employee', 'EmployeeController@create')->name('employees.create');
    Route::post('/employees', 'EmployeeController@store')->name('employees.store');
    Route::get('/employees/profile/{employee_id}', 'EmployeeController@employeeProfile')->name('employees.profile');
    Route::delete('/employees/{employee_id}', 'EmployeeController@destroy')->name('employees.delete');
    // Routes for employees //
});

Route::namespace('Employee')->prefix('employee')->name('employee.')->middleware(['auth','can:employee-access'])->group(function () {
    Route::get('/', 'EmployeeController@index')->name('index');
    Route::get('/profile', 'EmployeeController@profile')->name('profile');
    Route::get('/profile-edit/{employee_id}', 'EmployeeController@profile_edit')->name('profile-edit');
    Route::put('/profile/{employee_id}', 'EmployeeController@profile_update')->name('profile-update');
    Route::get('/reset-password', 'EmployeeController@reset_password')->name('reset-password');
    Route::post('/update-password', 'EmployeeController@update_password')->name('update-password');

    // Basic Form
    Route::get('/basicform/create-basic-form', [BasicFormController::class,'create'])->name('basicform.create');
    Route::post('/basicform', [BasicFormController::class,'store'])->name('basicform.store');

    // Premium Form
    Route::get('/premiumform/create-premium-form', [PremiumFormController::class,'create'])->name('premiumform.create');
    Route::post('/premiumform', [PremiumFormController::class,'store'])->name('premiumform.store');

    // Location/Map Form
    Route::get('/locationmapform/location-section-one', [LocationMapFormController::class,'createStepOne'])->name('locationmapform.create.step.one');
    Route::post('/locationmapform/location-section-one', [LocationMapFormController::class,'postCreateStepOne'])->name('locationmapform.create.step.one.post');

    Route::get('/locationmapform/fishing-access-section-two', [LocationMapFormController::class,'createStepTwo'])->name('locationmapform.create.step.two');
    Route::post('/locationmapform/fishing-access-section-two', [LocationMapFormController::class,'postCreateStepTwo'])->name('locationmapform.create.step.two.post');

    Route::get('/locationmapform/parking-access-section-three', [LocationMapFormController::class,'createStepThree'])->name('locationmapform.create.step.three');
    Route::post('/locationmapform/parking-access-section-three', [LocationMapFormController::class,'postCreateStepThree'])->name('locationmapform.create.step.three.post');

    Route::get('/locationmapform/hours-of-use-section-four', [LocationMapFormController::class,'createStepFour'])->name('locationmapform.create.step.four');
    Route::post('/locationmapform/hours-of-use-section-four', [LocationMapFormController::class,'postCreateStepFour'])->name('locationmapform.create.step.four.post');

    Route::get('/locationmapform/boat-ramp-access-section-five', [LocationMapFormController::class,'createStepFive'])->name('locationmapform.create.step.five');
    Route::post('/locationmapform/boat-ramp-access-section-five', [LocationMapFormController::class,'postCreateStepFive'])->name('locationmapform.create.step.five.post');

    Route::get('/locationmapform/area-amenities-section-six', [LocationMapFormController::class,'createStepSix'])->name('locationmapform.create.step.six');
    Route::post('/locationmapform/area-amenities-section-six', [LocationMapFormController::class,'postCreateStepSix'])->name('locationmapform.create.step.six.post');

    // Resource Form
    Route::get('/resourceform/create-resource-form', [ResourceFormController::class,'create'])->name('resourceform.create');
    Route::post('/resourceform', [ResourceFormController::class,'store'])->name('resourceform.store');

    // HotSpots Form
    Route::get('/hotspotsform/create-hotspots-form', [HotSpotsFormController::class,'create'])->name('hotspotsform.create');
    Route::post('/hotspotsform', [HotSpotsFormController::class,'store'])->name('hotspotsform.store');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
