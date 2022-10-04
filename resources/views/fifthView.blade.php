<h1> Parameter value: {{$parameter ?? 0}}</h1>
<h1> Result: {{$result}}</h1>

{!! Form::open(['url' => 'send']) !!}
{{ Form::text('email', 'example@gmail.com') }}
{{ Form::submit('Submit button') }}
{!! Form::close() !!}