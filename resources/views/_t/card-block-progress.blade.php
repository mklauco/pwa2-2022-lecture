<div class="card">
  <div class="card-body">
    <div class="fs-4 fw-semibold">{{$total ?? '"total"'}}</div>
    <div>{{$title ?? '"title"'}}</div>
    <div class="progress progress-thin my-2">
      @php
        $width = 0;
        if ($total > 0){
          $width = (float)($value ?? '33')/(float)($total ?? '100')*100;
        }
      @endphp
      <div class="progress-bar bg-danger" role="progressbar" style="width: {{$width}}%" aria-valuenow="{{$width ?? '33'}}" aria-valuemin="0" aria-valuemax="{{$total ?? '100'}}"></div>
    </div>
    <small class="text-medium-emphasis">{{$subtitle ?? '"subtitle"'}}
      {{-- <span class="text-black-50">
        "title": {{$title ?? '"title"'}}<br />
        "subtitle": {{$subtitle ?? '"subtitle"'}}<br />
        "value": {{$value ?? '"value"'}}<br />
        "total": {{$total ?? '"total"'}}<br />
        "width": {{(float)($value ?? '33')/(float)($total ?? '100')*100}}%<br />
      </span> --}}
    </small>
  </div>
</div>