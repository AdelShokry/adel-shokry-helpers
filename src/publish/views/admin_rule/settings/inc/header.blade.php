<!-- BEGIN CONTENT BODY -->
<br>
                    <div class="row">
                        <div class="col-md-12">
<!-- BEGIN TODO SIDEBAR -->
<div class="todo-ui">
    <div class="todo-sidebar">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
                    <span class="caption-subject font-green-sharp bold uppercase">{{ trans('lang.settings') }} </span>
                </div>
            </div>
            <div class="portlet-body todo-project-list-content">
                <div class="todo-project-list">
                    <ul class="nav nav-stacked">
<li class="{{ Request::segment(3) == 'main_settings' ? 'active' : '' }}{{ Request::segment(3) == ''?'active':'' }}">
                            <a href="{{ url(cp.'settings/main_settings') }}">{{ trans('lang.main_settings') }}</a>
                        </li>
                        <li class="{{ Request::segment(3) == 'languages' ? 'active' : '' }}">
                            <a href="{{ url(cp.'settings/languages') }}" data="languages">{{ trans('lang.languages') }}</a>
                        </li>
                        
                     {{--    <li class="{{ Request::segment(3) == 'about' ? 'active' : '' }}">
                            <a href="{{ url(cp.'settings/about') }}">{{ trans('lang.about') }}</a>
                        </li>
                        <li class="{{ Request::segment(3) == 'map' ? 'active' : '' }}">
                            <a href="{{ url(cp.'settings/map') }}">{{ trans('lang.site_map') }}</a>
                        </li> --}}

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END TODO SIDEBAR -->
                                <!-- BEGIN TODO CONTENT -->
                                <div class="todo-content">
                                   <!-- BEGIN Portlet PORTLET-->
                           
