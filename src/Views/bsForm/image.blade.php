
<?php
	$name = !empty($name) ? $name : '';
	$url = !empty($url) ? $url : url($cpanel.'img/no-image.png');
?>


<div class="fileinput fileinput-new" data-provides="fileinput">
    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
        <img src="{{ $url }}" alt=""> </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
    <div>
        <span class="btn default btn-file">
            <span class="fileinput-new"> {{ trans('lang.select_image') }} </span>
            <span class="fileinput-exists"> {{ trans('lang.change') }} </span>
          {!! Form::file($name) !!} </span>
        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('lang.remove') }} </a>
    </div>
</div>
