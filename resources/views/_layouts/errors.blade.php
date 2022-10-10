<div class="row justify-content-center">
  <div class="col-12">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">{!! Session::get('success') !!}</div>
    @endif
    
    @if (Session::has('failure'))
    <div class="alert alert-danger" role="alert">{!! Session::get('failure') !!}</div>
    @endif
    
    @if ($errors->any())
    <div class="alert alert-danger rounded-0">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
</div>