<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">
  
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  
  
</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">
    
    @include('_layouts.sidebar')
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('_layouts.navbar')
        
        @yield('content')
      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
              @php
              $S = \Carbon\Carbon::createFromTimestamp(exec("git log -1 --format=%at"));
              @endphp
              Last system update:&nbsp;<strong>{{$S->tz('Europe/Berlin')->toDateTimeString()}}</strong>
              |
              Laravel version:&nbsp;<strong>{{app()->version()}}</strong> |
              PHP version:&nbsp;<strong>{{phpversion()}}</strong> |
              Enviroment:&nbsp;<strong>{{App::environment()}}</strong> |
              IP Address:&nbsp;<strong>{{$_SERVER['REMOTE_ADDR']}}</strong>    
            </div>
        </div>
    </footer>

    </div>
    
  </div>
  
  
  
  
  
  {{-- @include('_layouts.sidebar-coreui')
  
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
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
      
    </footer> --}}
    
  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
  
  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  
  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script> --}}
  
  
</body>
</html>
