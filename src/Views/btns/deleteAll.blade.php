
@if(!empty($attr))

 <label for="submitDeleteAll" 

	@foreach($attr as $key => $value)
	{{ $key }}="{{ $value }}" &nbsp

	@endforeach
 ><i class="fa fa-times fa-fw"></i> {{ trans('lang.delete_selected') }}</label>

	

@else
	   <label for="submitDeleteAll" class="btn btn-danger"><i class="fa fa-times fa-fw"></i> {{ trans('lang.delete_selected') }}</label>
    

@endif

{!! Form::open(['method'=>'delete','id'=>'formDeleteAll','class'=>'hidden']) !!}
    {!! Form::submit('',['class'=>'hidden','id'=>'submitDeleteAll']) !!}
    {!! Form::close() !!}


