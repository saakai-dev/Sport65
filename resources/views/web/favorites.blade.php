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
                <li class="active">Favorites</li>
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
                </div>
            </div>
        </div>
    </section>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
@endsection