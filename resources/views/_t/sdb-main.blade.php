<li class="nav-item">
  <a class="nav-link" href="{{$link ?? '#'}}">
    <i class="nav-icon cil-{{$icon ?? 'speedometer'}}"></i>
    {{__('sidebar.'. str_replace(' ', '_', strtolower($title ?? 'title')) )}}
  </a>
</li>