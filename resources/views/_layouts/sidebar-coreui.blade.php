<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex">
    <a href="{{route('home')}}" class="link-light fs-5">PhoneBook</a>
  </div>
  <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-title">{{__('sidebar.user_space')}}</li>

    
    @include('_t.sdb-main', ['title' => 'User Profile', 'icon' => 'user', 'link' => '#'])
    
    
  </ul>
  {{-- <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button> --}}
</div>