{{ Form::label($tag.'_price', __('wtrack.'.$tag.'_price')) }}:
<div class="input-group mb-3">
  @if ($errors->has($tag.'_price'))
  {{ Form::text($tag.'_price', $$space[$tag.'_price'] ?? '', array('class' => 'form-control is-invalid')) }}
  @else
  {{ Form::text($tag.'_price', $$space[$tag.'_price'] ?? '', array('class' => 'form-control')) }}
  @endif
  {{ Form::select($tag.'_currency', $currency_list, $$space[$tag.'_currency'] ?? '', array('class' => 'form-select')) }}

  {{ Form::select($tag.'_cc', $payment_list, $$space[$tag.'_cc'] ?? '', array('class' => 'form-select')) }}

  @error($tag.'_price')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror

</div>
