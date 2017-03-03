@extends('layout.index')
@section('title') {{ trans('lang.settings') }}  @endsection
@section('menu') {!! breadcrumbs('lang') !!}  @endsection
@section('content')


@include(user('rule').'_rule.settings.inc.header')

 <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="fa fa-globe font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">{{ trans('lang.languages') }}</span>
                                    </div>
<div class="actions">
    <a class="btn btn-circle btn-icon-only btn-default add_lang" title="{{ trans('lang.create') }}" data-toggle="modal" href='#modal-create'>
        <i class="fa fa-plus"></i>
    </a>
    {{-- <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;"> --}}
    </a>
    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
</div>
</div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height:400px" data-always-visible="1" data-rail-visible="1" data-rail-color="red" data-handle-color="green">
                                        <div class="row">

@foreach (\App\Lang::all() as $lang)
	<input type="hidden" name="flug[]" value="{{ $lang->flug }}">
	<div class="col-md-4">
		<div class="form-group">
			<div class="form-control">{{ $lang->name }}</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<div class="form-control">{{ $lang->code }}</div>
		</div>
	</div>
	<div class="col-md-4">
	<div class="form-group">
		<a class="btn btn-primary" data-toggle="modal" href='#modal-flug-{{ $lang->id }}'>
		<img src="{{ flug($lang->code) }}">
		</a>
		<div class="modal fade" id="modal-flug-{{ $lang->id }}">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">{{ trans('lang.select_flug') }}</h4>
					</div>
					<div class="modal-body">

					<div class="flug_result"></div>
	<div  style="height:400px;overflow: auto; "  dir="ltr" >

	<table class="">
		<tbody>
			<tr>
<?php $i = 0; ?>
@foreach (flugs() as $flug)
<?php $i++; ?>
				<td><div class="btn {{ $lang->flug == $flug['file'] ? 'btn-primary' : 'btn-default' }} flug_btn" name="{{ $flug['file'] }}" url="{{ url(cp.'settings/lang/flug') }}" lang="{{ $lang->id }}"><img src="{{ $flug['url'] }}"></div></td>
@if ($i==13)
</tr><tr> 
<?php $i = 0; ?>
@endif

@endforeach
			</tr>
		</tbody>
	</table>
	

	</div>
					</div>
				</div>
			</div>
		</div>
	



		<a class="btn btn-primary" data-toggle="modal" href='#modal-files-{{ $lang->id }}'>{{ trans('lang.trans_files') }}</a>
		

		<div class="modal fade" id="modal-files-{{ $lang->id }}">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					<div class="lang_files_result"></div>
					<div role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
						@foreach (langFiles($lang->code) as $key => $file)
							<li role="presentation" class="{{ $key == 0 ? 'active' : '' }}">
								<a href="#lang_files_{{ $key }}-{{ $lang->id }}" aria-controls="lang_files_{{ $key }}-{{ $lang->id }}" role="tab" data-toggle="tab">
								{{ ucfirst(explode('.', $file['name'])[0]) }}</a>
							</li>
						@endforeach
						</ul>
					
						<!-- Tab panes -->
						<div class="tab-content">
						@foreach (langFiles($lang->code) as $key => $file)
							<div role="tabpanel" class="tab-pane {{ $key == 0 ? 'active' : '' }}" id="lang_files_{{ $key }}-{{ $lang->id }}">
							{!! Form::open(['url'=>cp.'settings/lang/update_files']) !!}
	<div file="{{ $file['name'] }}"  dir="ltr" lang-id="{{ $lang->id }}">

{{-- <textarea name="content[]" file="{{ $file['name'] }}" lang-id="{{ $lang->id }}" class="content form-control" id="" cols="30" rows="20"> --}}
<?php
// $content = file_get_contents($file['path']);
$content = @ include $file['path'];
?>
{{-- </textarea> --}}
<div class="alert" style="height:400px;overflow: auto; width: 100%; " dir="rtl">
	@foreach ($content as $k => $v)
@if (!is_array($v))
	<div class="col-sm-3">
		<div class="form-group">
		<div class="form-control label-default">{{ $k }}</div>
		</div>
	</div>
	<div class="col-sm-9">
		<div class="form-group">
			<input type="text" name="content_{{ $file['name'] }}[]" class="form-control" value="{{ $v }}">
			<input type="hidden" name="keys_{{ $file['name'] }}[]" class="form-control" value="{{ $k }}">
		</div>
	</div>
@endif
@endforeach
<div class="clearfix"></div>
</div>
<input type="hidden" name="fileName[]" value="{{ $file['name'] }}">
<input type="hidden" name="lang" value="{{ $lang->id }}">
	</div>
	{!! Form::close() !!}
							</div>
						@endforeach
						</div>
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('lang.close') }}</button>
						<button type="button" class="btn btn-primary lang_files_submit">{{ trans('lang.save') }}</button>
					</div>
				</div>
			</div>
		</div>
<a class="btn btn-primary " data-toggle="modal" href='#modal-edit-{{ $lang->id }}' title="{{ trans('lang.edit') }}">
		<i class="fa fa-edit"></i>
		</a>
<div class="modal fade" id="modal-edit-{{ $lang->id }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">{{ trans('lang.lang_edit') }}</h4>
			</div>
			<div class="modal-body">
			<div class="edit_result"></div>
			{!! Form::open(['url'=>cp.'settings/lang/'.$lang->id.'/edit','class'=>'edit_lang_form','id'=>'edit_lang_form_'.$lang->id]) !!}
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" name="name" autofocus="" placeholder="{{ trans('lang.lang_name') }}" value="{{ $lang->name }}" class="form-control">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" name="code" value="{{ $lang->code }}"  placeholder="{{ trans('lang.lang_code') }}" class="form-control">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <div class="input-group">
						        <div class="icheck-list">
						            <label>
						                <input type="checkbox" {{ $lang->default == 1 ? 'checked' : '' }} name="default" value="1" class="icheck" data-checkbox="icheckbox_square-grey"> {{ trans('lang.default_lang') }} 
						            </label>  
						        </div>
						    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <div class="input-group">
						        <div class="icheck-inline">
						            <label>
						                <input type="radio" name="direction" 
						                value="rtl" {{ $lang->direction == 'rtl' ? 'checked' : '' }} class="icheck" data-radio="iradio_square-grey">{{ trans('lang.rtl') }}</label> 
						        </div>
						    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <div class="input-group">
						        <div class="icheck-inline">
						            <label>
						                <input type="radio" {{ $lang->direction == 'ltr' ? 'checked' : '' }} name="direction" 
						                value="ltr" class="icheck" data-radio="iradio_square-grey">{{ trans('lang.ltr') }}</label> 
						        </div>
						    </div>
						</div>
					</div>
				</div>
			{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('lang.close') }}</button>
				<button type="submit" form="edit_lang_form_{{ $lang->id }}" class="btn btn-primary">{{ trans('lang.save') }}</button>
			</div>
		</div>
	</div>
</div>
@if (\App\Lang::count() > 1 && app()->getLocale() != $lang->code)
<a class="btn btn-danger " data-toggle="modal" href='#modal-delete-{{ $lang->id }}' title="{{ trans('lang.delete') }}">
		<i class="fa fa-trash"></i>
		</a>
@else
<a class="btn btn-danger " disabled="disabled"  href='javasctipt:;' title="{{ trans('lang.delete') }}">
		<i class="fa fa-trash"></i>
		</a>
@endif
<div class="modal fade" id="modal-delete-{{ $lang->id }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">{{ trans('lang.warning') }}</h4>
			</div>
			<div class="modal-body">
			<div class="delete-lang-result"></div>
				<p class="lead text-danger">{{ trans('lang.delete_msg',['var'=> $lang->name]) }}</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('lang.close') }}</button>
				<button type="button" class="btn btn-danger confirm_delete_lang" url="{{ url(cp.'settings/lang/delete') }}" lang="{{ $lang->id }}">{{ trans('lang.confirm_delete') }}</button>
			</div>
		</div>
	</div>
</div>



	</div>
	</div>
@endforeach

<div class="modal fade" id="modal-create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">{{ trans('lang.lang_create') }}</h4>
			</div>
			<div class="modal-body">
			<div id="create_result"></div>
			{!! Form::open(['url'=>cp.'settings/lang/create','id'=>'create_lang_form']) !!}
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" name="name" autofocus="" placeholder="{{ trans('lang.lang_name') }}" class="form-control">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" name="code"  placeholder="{{ trans('lang.lang_code') }}" class="form-control">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <div class="input-group">
						        <div class="icheck-list">
						            <label>
						                <input type="checkbox" name="default" value="1" class="icheck" data-checkbox="icheckbox_square-grey"> {{ trans('lang.default_lang') }} 
						            </label>  
						        </div>
						    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <div class="input-group">
						        <div class="icheck-inline">
						            <label>
						                <input type="radio" name="direction" 
						                value="rtl" checked="" class="icheck" data-radio="iradio_square-grey">{{ trans('lang.rtl') }}</label> 
						        </div>
						    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <div class="input-group">
						        <div class="icheck-inline">
						            <label>
						                <input type="radio" name="direction" 
						                value="ltr" class="icheck" data-radio="iradio_square-grey">{{ trans('lang.ltr') }}</label> 
						        </div>
						    </div>
						</div>
					</div>
				</div>
			{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('lang.close') }}</button>
				<button type="submit" form="create_lang_form" class="btn btn-primary">{{ trans('lang.save') }}</button>
			</div>
		</div>
	</div>
</div>








                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Portlet PORTLET-->
                               </div>
                            </div>
                            </div>
                                <!-- END TODO CONTENT -->





@include(user('rule').'_rule.settings.inc.footer')



@endsection

