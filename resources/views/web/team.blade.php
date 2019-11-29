@extends('web.layouts.app')

@section('content')
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Top Clube</h3>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Top Clube</li>
            </ul>
        </div>
    </div>



    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                @foreach($topTeams as $team)
                    <div class="col-md-3">
                        <div class="message-box">
                            <h3>Clube: {!! $team->name !!}</h3>
                            <b>Logo:</b> <img width="150px" height="150px" src="{!! $team->logo !!}">
                            <b>About:</b>
                            <p class="text-center">{!! $team->description !!}</p>
                        </div>
                    </div>
                @endforeach
                {!! $topTeams->links() !!}

            </div>
        </div>
    </section>

    {{--    @foreach($blog as $blog)--}}

@endsection