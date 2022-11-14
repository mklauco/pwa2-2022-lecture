@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    
    
    <div class="col-12">
      
      <a href="{{route('departments.create')}}" class="btn btn-secondary"><span class="cil-user btn-icon mr-2"></span> Add department</a>
      
      <table class="table table-striped table-bordered">
        <thead>
          <th>Name</th>
          <th>Abbreviation</th>
          <th>Number of Employees</th>
          <th>Director</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>Deleted at</th>
          <th></th>
        </thead>
        @foreach ($departments as $d)
        <tr @if($d->trashed())class="text-danger"@endif>
          <td>{{$d->name}}</td>
          <td>{{$d->abbreviation}}</td>
          <td>{{$d->number_employees}}</td>
          <td>{{$d->director->full_name ?? 'n/a'}}</td>
          <td>{{$d->created_at}}</td>
          <td>{{$d->updated_at}}</td>
          <td>{{$d->deleted_at}}</td>
          <td>
            <a class="link" href="{{route('departments.edit', $d->id)}}">
              Edit
            </a>
          </td>
          <td>
            @if(!$d->trashed())
            {{ Form::open(array('route' => ['departments.destroy', $d->id], 'method'=>'DELETE')) }}
            {{ Form::submit('delete', array('class' => 'btn btn-danger my-0 py-0', 'onclick' => 'return confirm("You are about to delete the department.")' ))}}
            {{ Form::close() }}
            @else
            {{ Form::open(array('route' => ['departments.forceDestroy', $d->id], 'method'=>'DELETE')) }}
            {{ Form::submit('Permanent delete', array('class' => 'btn btn-danger my-0 py-0', 'onclick' => 'return confirm("You are about to PERMANENTLY delete the department.")' ))}}
            {{ Form::close() }}
            {{ Form::open(array('route' => ['departments.restore', $d->id], 'method'=>'POST')) }}
            {{ Form::submit('Restore', array('class' => 'btn btn-success my-0 py-0'))}}
            {{ Form::close() }}
            @endif
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    
    {{-- <div class="col-4">
      @include('_t.card-block', ['counter' => $depInfo['count'], 'title' => 'Number of departments'])
      
      @include('_t.card-block', ['counter' => $depInfo['number_employees'], 'title' => 'Total number of Employees'])
      @include('_t.card-block', ['counter' => $depInfo['average'], 'title' => 'Average number of employees'])
    </div> --}}
    
  </div>
</div>
@endsection