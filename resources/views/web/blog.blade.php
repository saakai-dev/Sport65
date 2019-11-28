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
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                <div class="col-md-9">

                    @foreach($blog as $blog)
                        <div class="feature-post small-blog">
                            <div class="col-md-5">
                                <div class="feature-img">
                                    <img src="{!! $blog->image !!}" height="332px" width="288" class="img-responsive"
                                         alt="#"/>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="feature-cont">
                                    <div class="post-info">
                                        <img src="images/profile-img.png" alt="#"/>
                                        <span>
                                 <h4>{!! Auth::user()->name !!}</h4>
                                 <h5>{!! $blog->create_at !!}</h5>
                              </span>
                                    </div>
                                    <div class="post-heading">
                                        <h3>{!! Str::limit($blog->title, 30) !!}</h3>
                                        <p>{!! Str::limit($blog->contents, 190) !!}</p>
                                        <div class="full">
                                            <a class="btn" href="/p_blog/{!! $blog->id !!}">Read More</a>
                                            @if (Auth::check())
                                                {!! Form::open(['url' => 'addFavorites', 'id' => 'ajax']) !!}
                                                {{--                                            <input type="text" hidden name="{!! $blog->id !!}" class="form-control">--}}
                                                <button class="button"><span class="fa fa-heart"></span></button>

                                                {!! Form::close() !!}@endif
                                        </div>


                                        {{--                                            {!! Form::open(['url' => 'addFavorites', 'id' => 'ajax']) !!}--}}

                                        {{--                                            <a href="#" id="favorite" class="bookmark">--}}
                                        {{--                                                <span class="fa fa-hard-of-hearing"></span>--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">--}}
                                        {{--                                            <input type="hidden" name="blog_id" id="blog_id"--}}
                                        {{--                                                   value="{{$blog['id']}}">--}}
                                        {{--                                            <input type="button" id="test" value="Ok">--}}

                                        {{--                                            {!! Form::close() !!}--}}
                                        {{--                                        @endif--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--                        {{ $blog->links() }}--}}


                </div>
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="search-bar-blog">
                            <form>
                                <input type="text" placeholder="search"/>
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <aside id="sidebar" class="left-bar">
                        <div class="feature-matchs">
                            <div class="team-btw-match">
                                <ul>
                                    <li>
                                        <img src="images/img-01_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-02.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/img-03_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-04_003.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/img-05_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-06.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/img-07_002.png" alt="">
                                        <span>Portugal</span>
                                    </li>
                                    <li class="vs"><span>vs</span></li>
                                    <li>
                                        <img src="images/img-08.png" alt="">
                                        <span>Germany</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <aside id="sidebar" class="left-bar">
                        <div class="banner-sidebar">
                            <img class="img-responsive" src="images/match-banner1.jpg" alt="#">
                            <h3>Argentina vs Chile|Goals of the match | COPA </h3>
                        </div>
                    </aside>
                    <aside id="sidebar" class="right-bar">
                        <div class="banner">
                            <img class="img-responsive" src="images/adds-3.jpg" alt="#">
                        </div>
                    </aside>
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
                                <tr>
                                    <td>1</td>
                                    <td><img src="images/img-01_004.png" alt="">Liverpool</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="images/img-02_002.png" alt="">Chelsea</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="images/img-03_003.png" alt="">Norwich City</td>
                                    <td>20</td>
                                    <td>15</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="images/img-04_002.png" alt="">West Brom</td>
                                    <td>60</td>
                                    <td>10</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="images/img-05.png" alt="">sunderland</td>
                                    <td>30</td>
                                    <td>06</td>
                                    <td>30</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="full">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img src="images/footer-logo.png" alt="#"/></a>
                            </div>
                            <p>Most of our events have hard and easy route choices as we are always keen to encourage
                                new riders.</p>
                            <ul class="social-icons style-4 pull-left">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="full">
                        <div class="footer-widget">
                            <h3>Menu</h3>
                            <ul class="footer-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="news.html">Latest News</a></li>
                                <li><a href="matche.html">Recent Matchs</a></li>
                                <li><a href="blog.html">Our Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full">
                        <div class="footer-widget">
                            <h3>Contact us</h3>
                            <ul class="address-list">
                                <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..
                                </li>
                                <li><i class="fa fa-phone"></i> 123 456 7890</li>
                                <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full">
                        <div class="contact-footer">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404"
                                    width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>Copyright © 2018 GameInfo.All rights reserved.</p>
            </div>
        </div>
    </footer>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
@endsection
