@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-auto me-auto">
              {{-- Card header --}}
              <strong>{{ __('space.title') }}</strong>
            </div> 
            <div class="col-auto">
            </div> 
          </div> 
        </div> 
        
        <div class="card-body">
          {{-- Card body --}}
          
        </div>
        <div class="card-footer text-muted">
          
          {{-- Card footer --}}
          <div class="row">
            <div class="col-auto me-auto">
            </div> 
            <div class="col-auto">
              {{ Form::submit(__('general.submit'), array('class' => 'btn btn-primary')) }}
              
              <a href="{{route('users.index')}}" class="btn btn-outline-success">{{__('general.cancel')}}</a>
            </div> 
          </div> 

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
