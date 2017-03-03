
    <body class="page-header-fixed page-content-white page-footer-fixed page-sidebar-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->

        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ url('/') }}" target="_blank">
                        <img src="{{$logo}}" alt="logo" height="20" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
               
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{ img('user',user('id')) }}" />
                                <span class="username username-hide-on-mobile">{{ user('name') }}
                                ( {{ trans('lang.'.ucfirst(user('rule'))) }} ) </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{ url(cp.'profile') }}">
                                        <i class="icon-user"></i> {{ trans('lang.edit_profile') }} </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="{{ url('logout') }}">
                                        <i class="icon-key"></i> {{ trans('lang.logout') }} </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN LANGUAGE BAR -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-language dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" src="{{ currentLang('flug') }}">
                                <span class="langname"> {{ currentLang('name') }} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-default">
                            @foreach (languages() as $lang)
                                <li>
                                    <a href="{{ $lang['url'] }}">
                                        <img alt="" src="{{ $lang['flug'] }}">{{ $lang['name'] }} </a>
                                </li>
                            @endforeach

                            </ul>
                        </li>
                        <!-- END LANGUAGE BAR -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
