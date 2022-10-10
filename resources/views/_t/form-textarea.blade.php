<div class="form-group">
  {{ Form::label($tag, __(($lang ?? $space).'.'.$tag)) }}:
  @if($errors->has($tag))
  {{ Form::textarea($tag, $$space[$tag] ?? '', ['class' => 'form-control is-invalid']) }}
  @error($tag)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  @else
  {{ Form::textarea($tag, $$space[$tag] ?? '', ['class' => 'form-control']) }}
  @endif
</div>