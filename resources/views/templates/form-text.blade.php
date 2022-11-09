
{{ Form::label( $tag, __( $space .'s.'.$tag) ) }}
@if($errors->has($tag))
@error($tag)
{{Form::text($tag, $$space[$tag] ?? null, array('class' => 'form-control is-invalid'))}}
<div class="invalid-feedback">
  {{ $message }}
</div>  
@enderror
@else
{{Form::text($tag, $$space[$tag] ?? null, array('class' => 'form-control'))}}
@endif