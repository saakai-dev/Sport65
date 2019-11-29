@extends('web.layouts.app')

@section('content')


    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Blog</h3>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class=""><a href="{!! asset('/p_blog') !!}">Blog</a></li>
                <li class="active">{!! Str::limit($blog->title, 20) !!}</li>
            </ul>
        </div>
    </div>
    </section>



    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                <div class="col-md-9">

                    <div class="feature-post small-blog">
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="{!! $blog->image !!}" class="img-responsive"
                                     alt="#"/>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="feature-cont">
                                <div class="post-info">
                                    <span>
                                 <h4>{!! Auth::user()->name !!}</h4>
                                 <h5>{!! $blog->create_at !!}</h5>
                              </span>
                                </div>
                                <div class="post-heading">
                                    <h3>{!! $blog->title !!}</h3>
                                    <p>{!! $blog->contents!!}</p>
                                    <div class="full">
                                        @if (Auth::check())

                                            @if($check == 1)
                                                {!! Form::open(['url' => 'unfavorite/'.$blog->id, 'id' => 'ajax']) !!}
                                                <button class="button" style="background: coral !important;"><span class="fa fa-heart"></span></button>
                                            @else
                                                {!! Form::open(['url' => 'favorite/'.$blog->id, 'id' => 'ajax']) !!}
                                                <button class="button button-blue"><span class="fa fa-heart"></span></button>
                                            @endif
                                            {!! Form::close() !!}@endif
                                    </div>
                                </div>
                            </div>
                        </div>



@endsection