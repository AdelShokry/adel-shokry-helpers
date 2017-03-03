<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="{{ getDir() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>{{ trans('lang.password_reset') }} | {{ site('site_name') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
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
            <!-- BEGIN FORGOT PASSWORD FORM -->
            {!! Form::open(['url'=>cp.'password/reset']) !!}
                <h3>{{ trans('lang.password_reset') }}</h3>
                <p> {{ trans('lang.enter_new_password') }} </p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{ trans('lang.email') }}" value="{{ $email or old('email') }}" name="email" /> 
                    </div>
                        @if ($errors->has('email'))
                            <strong class="help-block">
                                {{ $errors->first('email') }}
                            </strong>
                        @endif
                </div>
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" autofocus="" placeholder="{{ trans('lang.new_password') }}" name="password" /> 
                    </div>
                        @if ($errors->has('password'))
                            <strong class="help-block">
                                {{ $errors->first('password') }}
                            </strong>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{ trans('lang.password_confirmation') }}" name="password_confirmation" /> 
                    </div>
                        @if ($errors->has('password_confirmation'))
                            <strong class="help-block">
                                {{ $errors->first('password_confirmation') }}
                            </strong>
                        @endif
                </div>


                <div class="form-actions">
                    <button type="submit" class="btn green pull-right"> {{ trans('lang.password_reset') }} </button>
                    <br>
                </div>
            {!! Form::close() !!}
            <!-- END FORGOT PASSWORD FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> {{ site('copyright') }} </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
        {!! Html::script($cpanel.'/js/script.js') !!}


    </body>

</html>
