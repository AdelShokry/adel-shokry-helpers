@extends('layout.index')
@section('title') {{ trans('lang.settings') }}  @endsection
@section('menu') {!! breadcrumbs() !!}  @endsection
@section('content')


@include(user('rule').'_rule.settings.inc.header')

@include(user('rule').'_rule.settings.lang.index')

@include(user('rule').'_rule.settings.inc.footer')







@endsection

