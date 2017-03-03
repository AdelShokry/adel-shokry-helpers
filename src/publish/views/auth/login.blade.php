<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="{{ getDir() }}" home="{{ url('/') }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>{{ trans('lang.login') }} | {{ site('site_name') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}
        {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}
        {!! Html::style($cpanel.'css/style-'.getDir().'.css') !!}
        

        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ $icon }}" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ $logo }}" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            {!! Form::open(['class'=>'login-form']) !!}
                <h3 class="form-title">{{ trans('lang.login') }}</h3>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{ trans('lang.email') }}</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{ trans('lang.email') }}" name="email" /> </div>
                        @if ($errors->has('email'))
                            <strong class="help-block">
                                {{ $errors->first('email') }}
                            </strong>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">{{ trans('lang.password') }}</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{ trans('lang.password') }}" name="password" /> </div>
                        @if ($errors->has('password'))
                            <strong class="help-block">
                                {{ $errors->first('password') }}
                            </strong>
                        @endif
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1" />{{ trans('lang.remember') }} </label>
                    <button type="submit" class="btn green pull-right"> {{ trans('lang.enter') }} </button>
                </div>

                <div class="forget-password">
                    <h4>{{ trans('lang.forget_your_password') }}</h4>
                    <p> {{ trans('lang.no_worries') }}
                        <a href="{{ url('/password/reset') }}" id="forget-password"> {{ trans('lang.click_here') }}</a> {{ trans('lang.to_reset_your_password') }} </p>
                </div>

            {!! Form::close() !!}
            <!-- END LOGIN FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> {{ site('copyright') }} </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
        {!! Html::script($cpanel.'/js/script.js') !!}

    </body>

</html>





