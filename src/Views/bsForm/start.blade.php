<?php
$attributes = !empty($attributes) ? $attributes : [];
$icon = !empty($attributes['icon']) ? $attributes['icon'] : '';
$title = !empty($attributes['title']) ? trans('lang.'.$attributes['title']) : '';
$color = !empty($attributes['color']) ? $attributes['color'] : 'dark';

?>

    <div class="portlet box {{ $color }}">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="{{ $icon }}"></i>{{ $title }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body form portlet-empty">
<?php
 
 if(!empty($attributes['icon'])){ unset($attributes['icon']); }
 if(!empty($attributes['title'])){ unset($attributes['title']); }
 if(!empty($attributes['color'])){ unset($attributes['color']); }


?>               
{!! Form::open($attributes) !!}
    <div class="form-body">
       
