@extends('_layouts.app-coreui')

@section('content')
<div class="container">
  <div class="row">
    
    <div class="col-8">

      <table class="table table-striped table-bordered">
        <thead>
          <th>Name</th>
          <th>Abbreviation</th>
          <th>Number of Employees</th>
        </thead>
        @foreach ($departments as $d)
        <tr>
          <td>{{$d->name}}</td>
          <td>{{$d->abbreviation}}</td>
          <td>{{$d->number_employees}}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <div class="col-4">
      @include('_t.card-block', ['counter' => $departmentsInfo['count'], 'title' => 'Number of departments'])
      
      @include('_t.card-block', ['counter' => $departmentsInfo['number_employees'], 'title' => 'Total number of Employees'])
      @include('_t.card-block', ['counter' => $departmentsInfo['average'], 'title' => 'Average number of employees'])
    </div>
    
  </div>
</div>
@endsection