
<script>
  $(document).ready(function() {
    $('.s2-{{$tag}}').select2({
      @if($errors->has($tag))
      selectionCssClass : 'form-select is-invalid'
      @else
      selectionCssClass : 'form-select'
      @endif
    });
    @if(isset($active_ids))
    $('.s2-{{$tag}}').val({{$active_ids}});
    $('.s2-{{$tag}}').trigger('change');
    @endif
  });
</script>

<div class="form-group">
  @if($label ?? true)
  {{ Form::label($tag, __(($lang ?? $space).'.'.($labelTag ?? $tag))) }}:
  @endif
  @if(Auth::user()->debug_mode == 1)&nbsp;<span class="text-black-50">"{{$tag}}"</span>@endif
  @if($errors->has($tag))
  {{ Form::select($tag, ($list ?? ['0' => '0']), $$space[$tag] ?? '', ['name' =>  $tag.'[]', 'class' => 'form-select is-invalid'.' s2-'.$tag, 'multiple' => 'multiple'] ) }}
  @error($tag)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  @else
  {{ Form::select($tag, ($list ?? ['0' => '0']), $$space[$tag] ?? '', ['name' => $tag.'[]', 'class' => 'form-select'.' s2-'.$tag, 'disabled' => ($disabled ?? false), 'multiple' => 'multiple']) }}
  @endif
</div>