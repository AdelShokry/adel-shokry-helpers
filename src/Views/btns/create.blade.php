<?php 

	$href = !empty($url) ? $url : url()->current().'/create';

		

?>
@if(!empty($attr))

	<a href="{{ $href }}" 

	@foreach($attr as $key => $value)
	{{ $key }}="{{ $value }}" &nbsp

	@endforeach

	>
	<i class="fa fa-plus fa-fw "></i> 
	{{ trans('lang.create') }}</a>

@else
	<a href="{{ $href }}" class="btn btn-primary">
	<i class="fa fa-plus fa-fw "></i> 
	{{ trans('lang.create') }}
	</a>

@endif

