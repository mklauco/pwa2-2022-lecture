<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;

class DepartmentController extends Controller
{
    //
    
    public function index(){
        $departments = Department::all();
        $departmentsInfo['count'] = $departments->count();
        $departmentsInfo['number_employees'] = $departments->sum('number_employees');
        $departmentsInfo['average'] = $departments->average('number_employees');
        return view('departments.index')->with('departments', $departments)->with('departmentsInfo', $departmentsInfo);
        
    }
}
