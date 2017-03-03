
<?php
	$attributes = !empty($attributes) ? $attributes : [];
	$values = isset($value) ? $value : '';
   $style = isset($attributes['style']) ? $attributes['style'] : 'inline';
?>


<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <label>{{ trans('lang.'.$name) }}</label>
    <div class="input-group">
        <div class="icheck-{{ $style }}">
        @foreach ($options as $value => $label)
            <label>
                <input type="radio" name="{{ $name }}" 
                @if($value == $values) checked @endif
                value="{{ $value }}" class="icheck" data-radio="iradio_square-grey">{{ $label }} </label>
        @endforeach
                
        </div>
    </div>
</div>


