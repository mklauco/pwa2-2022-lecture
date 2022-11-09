<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

use Exception;

class DepartmentController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $dep = Department::with('director')->withTrashed()->orderBy('name', 'asc')->get();
    // $dep = Department::with('director')->orderBy('name', 'asc')->get();
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
    $create = true;
    return view('departments.upsert')->with('create', $create);
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
      'number_employees'    => 'required|numeric|gt:0',
    ];
    $validated = $request->validate($rules);
    // in DepartmentController.php method store()
    
    try {
      $d = Department::create([
        'name'                => $request['name'],
        'abbreviation'        => $request['abbreviation'],
        'number_employees'    => $request['number_employees'],
        'director_id' => 1,
      ]);
      session()->flash('success', 'Department created');
      return redirect()->route('departments.index');
    } catch (Exception $e) {
      session()->flash('failure', $e->getMessage());
      return redirect()->back()->withInput();
    }
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
    $create = false;
    return view('departments.upsert')->with('department', Department::find($id))->with('create', $create);
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
      'number_employees'    => 'required|numeric|gt:0',
    ];
    $validated = $request->validate($rules);
    
    $d = Department::find($id);
    $d->name                = $request->name;
    $d->abbreviation        = $request->abbreviation;
    $d->number_employees    = $request->number_employees;
    $d->director_id         = 1;
    $d->save();
    
    try {
      $d->save();
      session()->flash('success', 'Department updated');
      return redirect()->route('departments.index');
    } catch (Exception $e) {
      session()->flash('failure', $e->getMessage());
      return redirect()->back()->withInput();
    }
  }
  
  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    try {
      Department::find($id)->delete();
      session()->flash('success', 'Department deleted');
      return redirect()->route('departments.index');
    }
    catch (Exception $e) {
      session()->flash('failure', $e->getMessage());
      return redirect()->back();
    }
  }
  // in controller
  public function forceDestroy($id){
    try {
      $d = Department::withTrashed()->find($id)->forceDelete();
      session()->flash('success', 'Department was permanently deleted');
      return redirect()->route('departments.index');
    }
    catch (Exception $e) {
      session()->flash('failure', $e->getMessage());
      return redirect()->back()->withInput();
    }
  }
  
  public function restore($id){
    try {
      $d = Department::withTrashed()->find($id)->restore();
      session()->flash('success', 'Department restored');
      return redirect()->route('departments.index');
    }
    catch (Exception $e) {
      session()->flash('failure', $e->getMessage());
      return redirect()->back()->withInput();
    }
  }  
}
