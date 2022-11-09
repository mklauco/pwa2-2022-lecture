@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row">
    
    <div class="col-8">
      @if($create == true)
      {{Form::open(['route' => 'departments.store'])}}
      @else
      {{Form::model($department, ['route' => ['departments.update', $department->id], 'method' => 'PUT'])}}
      @endif

      @include('templates.form-text', ['space' => 'department', 'tag' => 'name'])
      @include('templates.form-text', ['space' => 'department', 'tag' => 'abbreviation'])
      @include('templates.form-text', ['space' => 'department', 'tag' => 'number_employees'])
      
      {{-- {{Form::label('abbreviation', 'Abbreviation of department')}}
      {{Form::text('abbreviation', $department->abbreviation ?? null, array('class' => 'form-control'))}}
      
      {{Form::label('number_employees', 'Number of employees')}}
      {{Form::text('number_employees', $department->number_employees ?? null, array('class' => 'form-control'))}} --}}
      
      
      {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
      
      {{Form::close()}}
      
    </div>
    
  </div>
</div>
@endsection