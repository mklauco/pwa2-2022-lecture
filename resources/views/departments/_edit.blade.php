@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row">
    
    <div class="col-8">
      
      {{Form::model($department, ['route' => ['departments.update', $department->id], 'method' => 'PUT'])}}
      
      {{Form::label('name', 'Name of department')}}
      @if($errors->has('name'))
      @error('name')
      {{Form::text('name', $department->name, array('class' => 'form-control is-invalid'))}}
      <div class="invalid-feedback">
        {{ $message }}
      </div>  
      @enderror
      @else
      {{Form::text('name', $department->name, array('class' => 'form-control'))}}
      @endif
      
      
      {{Form::label('abbreviation', 'Abbreviation of department')}}
      {{Form::text('abbreviation', $department->abbreviation, array('class' => 'form-control'))}}
      
      {{Form::label('number_employees', 'Number of employees')}}
      {{Form::text('number_employees', $department->number_employees, array('class' => 'form-control'))}}
      
      
      {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
      
      {{Form::close()}}
      
    </div>
    
  </div>
</div>
@endsection