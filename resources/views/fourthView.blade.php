<h1> Returned from the controller with variable: {{$variable}}</h1>

<ul>
  @foreach ($array as $a)
  <li>{{$a}}</li>
  @endforeach
</ul>