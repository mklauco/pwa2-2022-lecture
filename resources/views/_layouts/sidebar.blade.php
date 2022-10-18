<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PhoneBook</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ request()->is('departments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('departments.index')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Departments</span>
    </a>
  </li>

  <li class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('users.index')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Users</span>
    </a>
  </li>
  

  <!-- Divider -->
  <hr class="sidebar-divider">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>