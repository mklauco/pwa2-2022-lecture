<div class="form-group">
  @if($label ?? true)
  {{ Form::label($tag, __(($lang ?? $space).'.'.($labelTag ?? $tag))) }}:
  @endif
  @if(Auth::user()->debug_mode == 1)&nbsp;<span class="text-black-50">"{{$tag}}"</span>@endif
  @if($errors->has($tag))
  {{ Form::select($tag, [null => __('general.please_select')] + ($list ?? ['0' => '0']), $$space[$tag] ?? '', ['class' => 'form-select is-invalid']) }}
  @error($tag)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  @else
  {{ Form::select($tag, [null => __('general.please_select')] + ($list ?? ['0' => '0']), $$space[$tag] ?? '', ['class' => 'form-select', 'disabled' => ($disabled ?? false)]) }}
  @endif
</div>