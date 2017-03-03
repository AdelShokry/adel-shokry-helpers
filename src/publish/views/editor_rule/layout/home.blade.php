@extends('layout.index')
@section('title') {{ trans('lang.home') }}  @endsection
@section('menu') {!! breadcrumbs('cp.home') !!}  @endsection
@section('content')
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-calendar-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="200">0</span>
                                    </div>
                                    <div class="desc"> New Feedbacks </div>
                                </div>
                                <a class="more" href="javascript:;"> 
                                    <i class="m-icon-swapright m-icon-white"></i>
                                   <span class="clearfix"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="400">0</span></div>
                                    <div class="desc"> Total Profit </div>
                                </div>
                                <a class="more" href="javascript:;"> 
                                    <i class="m-icon-swapright m-icon-white"></i>
                                    <span class="clearfix"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="100">0</span>
                                    </div>
                                    <div class="desc"> New Orders </div>
                                </div>
                                <a class="more" href="javascript:;"> 
                                    <i class="m-icon-swapright m-icon-white"></i>
                                    <span class="clearfix"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
                                        <span data-counter="counterup" data-value="300"></span></div>
                                    <div class="desc"> Brand Popularity </div>
                                </div>
                                <a class="more" href="javascript:;"> 
                                    <i class="m-icon-swapright m-icon-white"></i>
                                    <span class="clearfix"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>


@endsection