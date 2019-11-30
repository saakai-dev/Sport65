@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Site Reviews</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('siteReviews.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
{{--        <div class="box box-primary">--}}
{{--            <div class="box-body">--}}
{{--                    @include('site_reviews.table')--}}
                <div class="row">
                    <div class="box box-primary">
                        <div class="box-body ">
                            <div class="col-md-4">
                                <!-- Info Boxes Style 2 -->
                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">V.Good</span>
                                        <span class="info-box-number">{!! $votesData['cvG'] !!}</span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: {!! $votesVGood !!}%"></div>
                                        </div>
                                        <span class="progress-description">
                    {!! $votesVGood !!}%
                  </span>
                                    </div>
                                </div>
                            </div>

                            {{--                    2--}}
                            <div class="col-md-4">
                                <!-- Info Boxes Style 2 -->
                                <div class="info-box bg-yellow">
                                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Good</span>
                                        <span class="info-box-number">{!! $votesData['cG'] !!}</span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: {!! $votesGood !!}%"></div>
                                        </div>
                                        <span class="progress-description">
                                    {!! $votesGood !!}%
               </span>
                                    </div>
                                </div>
                            </div>

                            {{--                    3--}}

                            <div class="col-md-4">
                                <!-- Info Boxes Style 2 -->
                                <div class="info-box bg-red">
                                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Bad</span>
                                        <span class="info-box-number">{!! $votesData['cB'] !!}</span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: {!! $votesBad !!}%"></div>
                                        </div>
                                        <span class="progress-description">
                                    {!! $votesBad !!}%
                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h2>Totle: {!! $votes !!}</h2>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
        <div class="text-center">
        
        </div>
{{--    </div>--}}
@endsection

