
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->

<html lang="{{ app()->getLocale() }}" dir="{{ getDir() }}" >
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />

<title>{{ trans('lang.warning') }} | {{ site('site_name') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="{{ site('site_desc') }}" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}
        
        {!! Html::style($cpanel.'css/style-'.getDir().'.css') !!}

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ $icon }}" /> </head>
    <!-- END HEAD -->

    <body class=" page-500-full-page">
        <div class="row">
    <div class="col-md-12 page-500">
        <div class=" number font-red"> 401 </div>
        <div class=" details">
            <h3>{{ trans('lang.unauthorized_title') }}</h3>
            <p> {{trans('lang.unauthorized_msg')}}
                <br/> </p>
            <p>
                <a href="{{ url('/') }}" class="btn red btn-outline"> {{ trans('lang.return_home') }} </a>
                <br> </p>
        </div>
    </div>
</div>
       <!--[if lt IE 9]>
        {!! Html::script($cpanel.'/js/script.js') !!}
<![endif]-->

    </body>

</html>
