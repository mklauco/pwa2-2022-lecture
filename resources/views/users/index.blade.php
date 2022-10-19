@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    
    
    <div class="col-8">
      
      {{-- <a href="{{route('departments.create')}}" class="btn btn-secondary"><span class="cil-user btn-icon mr-2"></span> Add department</a> --}}
      
      <table class="table table-striped table-bordered">
        <thead>
          <th>Name</th>
          <th>Email</th>
          <th>Number of departments</th>
        </thead>
        @foreach ($users as $u)
        <tr>
          <td>{{$u->full_name}}</td>
          <td>{{$u->email}}</td>
          <td>
            <strong>{{$u->departments->count()}}</strong>:
            @foreach ( $u->departments as $d)
            {{$d->abbreviation}}@if (!$loop->last),@endif
            @endforeach
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    
    <div class="col-4">
      @include('_t.card-block', ['counter' => $users->count(), 'title' => 'Number of users'])
      
    </div>
    
  </div>
</div>
@endsection