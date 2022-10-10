{{ Form::label($tag.'_price', __('wtrack.'.$tag.'_price')) }}:
<div class="input-group mb-3">
  @if ($errors->has($tag.'_price'))
  {{ Form::date($tag.'_price', $$space[$tag.'_price'] ?? '', array('class' => 'form-control is-invalid')) }}
  @else
  {{ Form::date($tag.'_price', $$space[$tag.'_price'] ?? '', array('class' => 'form-control')) }}
  @endif


  @error($tag.'_price')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror

</div>
