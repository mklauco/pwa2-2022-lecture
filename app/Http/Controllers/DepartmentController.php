<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $dep = Department::orderBy('name', 'asc')->get();
        $depInfo['count'] = $dep->count();
        $depInfo['number_employees'] = $dep->sum('number_employees');
        $depInfo['average'] = $dep->average('number_employees');
        return view('departments.index')->with('departments', $dep)->with('depInfo', $depInfo);
        
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
        return view('departments.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $rules = [
            'name'                => 'required|string',
            'abbreviation'        => 'required|string|min:2',
            'number_employees'    => 'required|numeric',
        ];
        $validated = $request->validate($rules);
        
        $d = Department::create([
            'name'                => $request['name'],
            'abbreviation'        => $request['abbreviation'],
            'number_employees'    => $request['number_employees'],
        ]);
        // $d = NEW Department;
        // $d->name                = $request->name;
        // $d->abbreviation        = $request->abbreviation;
        // $d->number_employees    = $request->number_employees;
        // $d->save();
        // $d->last_id();
        return redirect()->route('departments.index');
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
        return view('departments.edit')->with('department', Department::find($id));
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'                => 'required|string',
            'abbreviation'        => 'required|string|min:2',
            'number_employees'    => 'required|numeric',
        ];
        $validated = $request->validate($rules);
        
        $d = Department::find($id);
        $d->name                = $request->name;
        $d->abbreviation        = $request->abbreviation;
        $d->number_employees    = $request->number_employees;
        $d->save();
        return redirect()->route('departments.index');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
        Department::find($id)->delete();
        return redirect()->route('departments.index');
    }
}
