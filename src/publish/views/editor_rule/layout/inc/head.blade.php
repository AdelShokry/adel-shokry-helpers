<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->

<html lang="{{ app()->getLocale() }}" dir="{{ getDir() }}" url="{{ url('/') }}">
<input type="hidden" id="token" value="{{ csrf_token() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>@yield('title') | {{ site('site_name') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="{{ site('site_desc') }}" name="description" />
        <meta content="" name="author" />
        <link rel="shortcut icon" href="{{ $icon }}" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}

        {!! Html::style($cpanel.'css/style-'.getDir().'.css') !!}
        {!! Html::style($cpanel.'css/icheck/all.css') !!}

        @yield('css')
        <!-- END THEME LAYOUT STYLES -->
        
        </head>
    <!-- END HEAD -->
