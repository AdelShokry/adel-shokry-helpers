<?php 

	$href = !empty($url) ? $url : url()->current().'/'.$id;

		

?>
@if(!empty($attr))

	<a href="{{ $href }}" 

	@foreach($attr as $key => $value)
	{{ $key }}="{{ $value }}" &nbsp

	@endforeach

	>
	<i class="fa fa-eye fa-fw "></i> 
	{{ trans('lang.view') }}</a>

@else
	<a href="{{ $href }}" title="{{ trans('lang.view') }}" class="fa fa-eye fa-lg"></a>

@endif


