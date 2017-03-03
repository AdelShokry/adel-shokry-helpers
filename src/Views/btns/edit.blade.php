<?php 

	$href = !empty($url) ? $url : url()->current().'/'.$id.'/edit';

		

?>
@if(!empty($attr))

	<a href="{{ $href }}" 

	@foreach($attr as $key => $value)
	{{ $key }}="{{ $value }}" &nbsp

	@endforeach

	title="{{ trans('lang.edit') }}" class="fa fa-edit fa-fw fa-lg"></a>

@else
	<a href="{{ $href }}" title="{{ trans('lang.edit') }}" class="fa fa-edit fa-fw fa-lg"></a>

@endif


