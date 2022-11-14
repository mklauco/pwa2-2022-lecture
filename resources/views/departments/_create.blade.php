@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row">
    
    <div class="col-8">

      {{Form::open(['route' => 'departments.store'])}}

      {{Form::label('name', 'Name of department')}}
      {{Form::text('name', null, array('class' => 'form-control'))}}

      {{Form::label('abbreviation', 'Abbreviation of department')}}
      {{Form::text('abbreviation', null, array('class' => 'form-control'))}}

      {{Form::label('number_employees', 'Number of employees')}}
      {{Form::text('number_employees', null, array('class' => 'form-control'))}}


      {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
      
      {{Form::close()}}
      
    </div>
    
  </div>
</div>
@endsection