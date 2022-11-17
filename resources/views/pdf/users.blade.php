<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body style="font-family: DejaVu Sans">
  <table>
    @foreach ($users as $u)
    <tr>
      <td>{{$u->id}}</td>
      <td>{{$u->full_name}}</td>
    </tr>  
    @endforeach
  </table>
</body>
</html>