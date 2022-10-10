<div class="form-group">
  {{ Form::label($tag, __(($lang ?? $space).'.'.($labelTag ?? $tag))) }}:
  @if(Auth::user()->debug_mode == 1)&nbsp;<span class="text-black-50">"{{$tag}}"</span>@endif
  @if(isset($note))&nbsp;<small><span class="text-black-50">({!!__(($lang ?? $space).'.'.$note)!!})</span></small>@endif
  @if($errors->has($tag))
  {{ Form::text($tag, $$space[$tag] ?? '', ['class' => 'form-control is-invalid', 'disabled' => ($disabled ?? false), 'readonly' => ($readonly ?? false), ]) }}
  @error($tag)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  @else
  {{ Form::text($tag, $$space[$tag] ?? '', ['class' => 'form-control', 'disabled' => ($disabled ?? false), 'readonly' => ($readonly ?? false)]) }}
  @endif
</div>