
<?php
   $attributes = !empty($attributes) ? $attributes : [];
   $value = !empty($value) ? $value : old($name);
   $name1 = $name;
   $name = $name.$lang_id;
?>

<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
   <label for="{{ $name }}" class="control-label">{{ trans('lang.'.$name1) }}</label>
<div class="input-icon right">   
   @if($errors->has($name))
   <i class="fa fa-warning tooltips" data-original-title="{{ $errors->first($name) }}"></i>
   @endif
   {!! Form::textarea($name,$value,array_merge([
      'class'=>'form-control',
      'placeholder' => trans('lang.'.$name1)
      ],$attributes)) !!}
   
</div>
</div>

