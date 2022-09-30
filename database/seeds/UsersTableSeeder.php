<?php

use App\Attendance;
use App\Department;
use \DateTime as DateTime;
use App\Role;
use App\User;
use App\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        DB::table('employees')->truncate();
        $employeeRole = Role::where('name', 'employee')->first();
        $adminRole =  Role::where('name', 'admin')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $employee = User::create([
            'name' => 'Akashdeep Nandi',
            'email' => 'akash@gmail.com',
            'password' => Hash::make('akash')
        ]);

        $employee->roles()->attach($employeeRole);
        $admin->roles()->attach($adminRole);
        $employee = Employee::create([
            'user_id' => $employee->id,
            'first_name' => 'Akashdeep',
            'last_name' => 'Nandi',
            'gender' => 'Male',
        ]);

        $create = Carbon::create(2020, 8, 17, 10, 00, 23, 'Asia/Kolkata');
        $update = Carbon::create(2020, 8, 17, 17, 00, 23, 'Asia/Kolkata');
    }
}
