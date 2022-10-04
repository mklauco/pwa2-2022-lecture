@extends('_layouts.app')

@section('content')
<div class="row">

  <div class="col-12">
    <table class="table table-striped table-bordered">
    @foreach ($departments as $d)
      <tr>
        <td>{{$d->name}}</td>
        <td>{{$d->abbreviation}}</td>
      </tr>
    @endforeach
    </table>
  </div>

</div>
@endsection