
<?php
   $attributes = !empty($attributes) ? $attributes : [];
	$options = !empty($options) ? $options : [];
	$value = !empty($value) ? $value : old($name);
?>



<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
   <label for="{{ $name }}" class="control-label">{{ trans('lang.'.trim($name,'[]')) }}</label>
<div class="input-icon right">   
   @if($errors->has($name))
	<i class="fa fa-warning tooltips" data-original-title="{{ $errors->first($name) }}"></i>
   @endif
   {!! Form::select($name,$options,$value,array_merge([
   	'class'=>'form-control'
   	],$attributes)) !!}
   
</div>
</div>