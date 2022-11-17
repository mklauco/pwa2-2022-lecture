@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        
        <div class="card-body">
          <div class="row">
            
            {{ Form::open(['route' => 'sendemail']) }}
            {{ Form::submit('Send Test Email') }}
            {{ Form::close() }}
            
          </div>
          <div class="row">
            
            {{ Form::open(['route' => 'exportxls']) }}
            {{ Form::submit('Export simple data') }}
            {{ Form::close() }}
          </div>

          <div class="row">
            
            {{ Form::open(['route' => 'exportPDF']) }}
            {{ Form::submit('Export PDF document') }}
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
