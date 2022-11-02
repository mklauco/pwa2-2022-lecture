@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    
    
    <div class="col-8">
      
      <p class="lead">{{$user->full_name}}</p>
      <table class="table table-striped table-bordered">
        <thead>
          <th>Login time</th>
          <th>Login IP</th>
          <th>User agent</th>
        </thead>
        @foreach ($retentions as $r)
        <tr>
          <td>{{$r->login_time}}</td>
          <td>{{$r->login_ip}}</td>
          <td>{{$r->user_agent}}</td>
        </tr>
        @endforeach
</table>
{{ $retentions->links() }}
    </div>
    
    <div class="col-4">
      @include('_t.card-block', ['counter' => $retentions->total(), 'title' => 'Number of logins'])
    </div>
    
  </div>
</div>
@endsection