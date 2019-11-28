@extends('web.layouts.app')

@section('content')

    <section id="top">
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right_top_section">
                                <!-- social icon -->
                                <ul class="social-icons pull-left">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                                <!-- end social icon -->
                                <!-- button section -->
                                <ul class="login">
                                    <li class="login-modal">
                                        <a href="#" class="login"><i class="fa fa-user"></i>Login</a>
                                    </li>
                                    <li>
                                        <div class="cart-option">
                                            <a href="#"><i class="fa fa-shopping-cart"></i>Register</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main-menu-section">
                                    <div class="menu">
                                        <nav class="navbar navbar-inverse">
                                            <div class="navbar-header">
                                                <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                        data-target=".js-navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#">Menu</a>
                                            </div>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="active"><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="news.html">News</a></li>
                                                    <li class="dropdown mega-dropdown">
                                                        <a href="match" class="dropdown-toggle" data-toggle="dropdown">Match<span
                                                                    class="caret"></span></a>
                                                        <ul class="dropdown-menu mega-dropdown-menu">
                                                            <li class="col-sm-8">
                                                                <ul>
                                                                    <li class="dropdown-header">Men Collection</li>
                                                                    <div id="menCollection" class="carousel slide"
                                                                         data-ride="carousel">
                                                                        <div class="carousel-inner">
                                                                            <div class="item active">
                                                                                <div class="banner-for-match"><a
                                                                                            href="#"><img
                                                                                                class="img-responsive"
                                                                                                src="images/match-banner1.jpg"
                                                                                                alt="#"/></a></div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                            <div class="item">
                                                                                <div class="banner-for-match"><a
                                                                                            href="#"><img
                                                                                                class="img-responsive"
                                                                                                src="images/match-banner1.jpg"
                                                                                                alt="#"/></a></div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                            <div class="item">
                                                                                <div class="banner-for-match"><a
                                                                                            href="#"><img
                                                                                                class="img-responsive"
                                                                                                src="images/match-banner1.jpg"
                                                                                                alt="#"/></a></div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                        </div>
                                                                        <!-- End Carousel Inner -->
                                                                        <!-- Controls -->
                                                                        <a class="left carousel-control"
                                                                           href="#menCollection" role="button"
                                                                           data-slide="prev">
                                                                            <span class="glyphicon glyphicon-chevron-left"
                                                                                  aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="right carousel-control"
                                                                           href="#menCollection" role="button"
                                                                           data-slide="next">
                                                                            <span class="glyphicon glyphicon-chevron-right"
                                                                                  aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.carousel -->
                                                                </ul>
                                                            </li>
                                                            <li class="col-sm-4">
                                                                <ul class="menu-inner">
                                                                    <li class="dropdown-header">Next Matchs</li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                    <li><a href="#">Contrary vs classical</a></li>
                                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.nav-collapse -->
                                        </nav>
                                        <div class="search-bar">
                                            <div id="imaginary_container">
                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="inner-page-banner">
            <div class="container">
            </div>
        </div>
        <div class="inner-information-text">
            <div class="container">
                <h3>Blog</h3>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
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
                                        </div>
                                        @if (Auth::check())
                                            <div class="panel-footer">
                                                <favorite
                                                        :post={{ $blog->id }}
                                                                :favorited={{ $blog->favorited() ? 'true' : 'false' }}
                                                ></favorite>
                                            </div>
                                        @endif
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
