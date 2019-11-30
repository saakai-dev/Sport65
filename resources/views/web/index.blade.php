@extends('web.layouts.app')

@section('content')
    <!-- LOADER -->
    {{--    <div id="preloader">--}}
    {{--        <img class="preloader" src="images/loading-img.gif" alt="">--}}
    {{--    </div>--}}
    <!-- END LOADER -->
    <div class="full-slider">
        <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                    <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="slider-contant" data-animation="animated fadeInRight">
                                <h3>If you Don’t Practice<br>You <span
                                            class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                                <p>If you use this site regularly and would like to help keep the site on the
                                    Internet,<br>
                                    please consider donating a small sum to help pay..
                                </p>
                                <button class="btn btn-primary btn-lg">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->
                <!-- Second slide -->
                <div class="item skyblue" data-ride="carousel" data-interval="5000">
                    <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="slider-contant" data-animation="animated fadeInRight">
                                <h3>If you Don’t Practice<br>You <span
                                            class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                                <p>You can make a case for several potential winners of<br>the expanded European
                                    Championships.</p>
                                <button class="btn btn-primary btn-lg">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->
                <!-- Third slide -->
                <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                    <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="slider-contant" data-animation="animated fadeInRight">
                                <h3>If you Don’t Practice<br>You <span
                                            class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                                <p>You can make a case for several potential winners of<br>the expanded European
                                    Championships.</p>
                                <button class="btn btn-primary btn-lg">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->
            </div>
            <!-- /.carousel-inner -->
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->
        <div class="news">
            <div class="container">
                <div class="heading-slider">
                    <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> Top Headlines :</p>
                    <!--made by vipul mirajkar thevipulm.appspot.com-->
                    <h1>
                        @foreach($news as $item)
                            <a href="" class="typewrite" data-period="2000"
                               data-type='["{!! $item->name !!}"]'>
                                <span class="wrap"></span>
                            </a>
                        @endforeach
                    </h1>
                    <span class="wrap"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="matchs-info">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="full">
                    <div class="matchs-vs">
                        <div class="vs-team">
                            <div class="team-btw-match">
                                @if ($match_today)
                                <ul>
                                    <li>
                                        <img src="{!! $match_today->image_one !!}" height="100px" width="100px" alt="">
                                        <span>{!! $match_today->team_one !!}</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="{!! $match_today->image_two !!}" height="100px" width="100px" alt="">
                                        <span>{!! $match_today->team_two !!}</span>
                                    </li>
                                </ul>
                                    @else
                                    <ul>
                                        <li>
                                            <img src="{!! asset('images/img-01_004.png') !!}" height="100px" width="100px" alt="">
                                            <span>-</span>
                                        </li>
                                        <li class="vs"><span>vs</span></li>
                                        <li>
                                            <img src="{!! asset('images/img-01_002.png') !!}" height="100px" width="100px" alt="">
                                            <span>-</span>
                                        </li>
                                    </ul>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="full">
                   @if ($match_today)
                        <div class="right-match-time">
                            <h2>{!! $match_today->title !!}</h2>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <span>{!! $match_today->match_date !!}</span>
                        </div>
                       @else
                       <h1>No Match to Day</h1>
                   @endif
                </div>
            </div>
        </div>
    </div>
    <section id="contant" class="contant">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    {{--                    <aside id="sidebar" class="left-bar">--}}
                    {{--                        <div class="banner-sidebar">--}}
                    {{--                            <img class="img-responsive" src="{{asset('images/img-05.jpg')}}" alt="#"/>--}}
                    {{--                            <h3>Lorem Ipsum is simply dummy text..</h3>--}}
                    {{--                        </div>--}}
                    {{--                    </aside>--}}

                    <h4>Match Fixture</h4>
                    <aside id="sidebar" class="left-bar">
                        <div class="feature-matchs">
                            <div class="team-btw-match">
                                @foreach($Matches as $Matches)
                                    <ul>
                                        <li>
                                            <img height="50px" width="50px" src="{!! $Matches->image_one !!}" alt="">
                                            <span>{!! $Matches->team_one !!}</span>
                                        </li>
                                        <li class="vs"><span>vs</span></li>
                                        <li>
                                            <img height="50px" width="50px" src="{!! $Matches->image_two !!}" alt="">
                                            <span>{!! $Matches->team_two !!}</span>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                    <h4>Points Table</h4>
                    <aside id="sidebar" class="left-bar">
                        <div class="feature-matchs">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Team</th>
                                    <th>P</th>
                                    <th>W</th>
                                    <th>L</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Point as $Point)
                                    <tr>
                                        <td>{!! $Point->id !!}</td>
                                        <td><img height="30px" width="30px" src="{!!$Point->logo !!}"
                                                 alt="">{!! $Point->name !!}
                                        </td>
                                        <td>{!! $Point->point !!}</td>
                                        <td>{!! $Point->win !!}</td>
                                        <td>{!! $Point->lose !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </aside>
                    <div class="content-widget top-story">
                        {{--                    <div class="content-widget top-story" style="background: url(images/bg1.png);">--}}
                        <div class="top-stroy-header">
                            <h2>Most Read <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                            <span class="date">{!! \Carbon\Carbon::now() !!}</span>
                            {{--                            <h2>Other Headlines</h2>--}}
                        </div>
                        <ul class="other-stroies">
                            @foreach($most as $most)
                                <li><a href="/blog/{!! $most->id !!}">{!! Str::limit($most->title, 30) !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <div class="news-post-holder">
                        @foreach($blogs as $blog)
                            <div class="news-post-widget">
                                <img class="img-responsive" height="430px" width="650px" src="{!! $blog->image !!}"
                                     alt="">
                                <div class="news-post-detail">
                                    <span class="date">{!! $blog->create_at !!}</span>
                                    <h2><a href="blog-detail.html">{!! Str::limit($blog->title, 45) !!}</a></h2>
                                    <p>{!! Str::limit($blog->contents, 200)!!}</p>
                                </div>
                            </div>
                        @endforeach
                        {!! $blogs->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main-heading sytle-2">
                            <h2>{!! $video->title !!}</h2>
                            <p>MultiMedia Library</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video_section_main theme-padding middle-bg vedio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="match_vedio">
                            <video class="img-responsive" controls>
                                <source src="{!! $video->video !!}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
