<?php 

if(!empty($name))
{
	$name = $name ;
}elseif(empty($name) && empty($options['name']))
{
	$name = trans('lang.thefield');

}elseif(!empty($options['name'])){
	$name =$options['name'];
}
	$options = !empty($options) ? $options :'';

	if (is_numeric($options))
	{
		$url = url()->current().'/'.$options;
	}elseif(is_array($options)){
		$url = isset($options['url']) ? $options['url'] : url()->current();
	}else{
		$url = url()->current();
	}

		

?>



@if(is_array($options))

<a msg="{{trans('lang.delete_msg',['var'=>$name])}}" url="{{ $url }}" href="javascript:;" title="{{trans('lang.delete')}}" 

	@foreach($options as $key => $value)
		@if ($key != 'url')
			{{ $key }}="{{ $value }}" &nbsp
		@endif
	@endforeach
	class="btn-delete"
>
     <i class="fa fa-trash"></i>
    </a>


@else
	<a msg="{{trans('lang.delete_msg',['var'=>$name])}}" url="{{ $url }}" href="javascript:;" title="{{trans('lang.delete')}}" class="btn-delete">
    <i class="fa fa-trash fa-lg"></i>

    </a>
@endif


