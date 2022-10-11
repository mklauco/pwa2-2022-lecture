<header class="header header-sticky mb-4">
  <div class="container-fluid">
    
    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
      <i class="icon icon-lg cil-menu"></i>    
    </button>
    <a class="header-brand d-md-none" href="#">
      
    </a>

    <ul class="header-nav d-none d-md-flex mx-2">
      {{-- <li class="nav-item me-2 ms-4 text-danger"> </li>  --}}
      
    </ul>    

    <nav class="header-nav ms-auto me-4">

    </nav>    

    <ul class="header-nav me-4">
      
      <a class="btn btn-outline-secondary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  
        <i class="icon me-2 cil-account-logout"></i>     
        {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      
    </ul>

    
  </div>
</header>