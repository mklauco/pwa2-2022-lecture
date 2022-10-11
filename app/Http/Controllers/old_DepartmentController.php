<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;

class DepartmentController extends Controller
{
    //
    
    public function index(){
        $dep = Department::all();
        $depInfo['count'] = $dep->count();
        $depInfo['number_employees'] = $dep->sum('number_employees');
        $depInfo['average'] = $dep->average('number_employees');
        return view('departments.index')->with('departments', $dep)->with('depInfo', $depInfo);
        
    }
}
