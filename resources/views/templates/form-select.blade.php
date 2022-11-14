<div class="form-group">
  {{Form::label($tag, __($space.'s.'.$tag))}}
  @if($errors->has($tag))
    @error($tag)
      {{Form::select($tag, [null => __('general.please_select')] + ($list ?? ['0' => '0']), $$space[$tag] ?? '', array('class' => 'form-control is-invalid'))}}
      <div class="invalid-feedback">
        {{ $message }}
      </div>  
    @enderror
  @else
    {{Form::select($tag, [null => __('general.please_select')] + ($list ?? ['0' => '0']), $$space[$tag] ?? '', array('class' => 'form-control'))}}
  @endif
</div>