<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  {{-- <script src="{{asset('css/custom.css')}}"></script> --}}
  
  <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
  
  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  {{-- @livewireStyles --}}
</head>

<body>
  @include('_layouts.sidebar-coreui')
  
  <div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
    @include('_layouts.header-coreui')
    
    
    <div class="body flex-grow-1 px-3">
      
      @include('_layouts.errors')
      
      @yield('content')

    </div>
    
    
    <footer class="footer">
      <div></div>
      @php
      $S = \Carbon\Carbon::createFromTimestamp(exec("git log -1 --format=%at"));
      @endphp
      <div class="">
        Last system update:&nbsp;<strong>{{$S->tz('Europe/Berlin')->toDateTimeString()}}</strong>
        |
        Laravel version:&nbsp;<strong>{{app()->version()}}</strong> |
        PHP version:&nbsp;<strong>{{phpversion()}}</strong> |
        Enviroment:&nbsp;<strong>{{App::environment()}}</strong> |
        IP Address:&nbsp;<strong>{{$_SERVER['REMOTE_ADDR']}}</strong>        
      </div>
      
    </footer>
    
  </div>
  
  
  <!-- CoreUI and necessary plugins-->
  
  <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous"></script>
  
  <script>      
  </script>
  
  
  {{-- @livewireScripts --}}
</body>
</html>
