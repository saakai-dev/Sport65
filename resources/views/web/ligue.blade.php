@extends('web.layouts.app')

@section('content')
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Ligue List</h3>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Ligue</li>
            </ul>
        </div>
    </div>



    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                @foreach($ligue as $ligue)
                    <div class="col-md-3">
                        <div class="message-box">
                            <h3>{!! $ligue->title !!}</h3>
                            <img src="{!! $ligue->logo !!}">
                        </div>
                    </div>
                @endforeach
                {{--                    <table class="table">--}}
                {{--                        <thead>--}}
                {{--                        <tr>--}}
                {{--                            <th scope="col">#</th>--}}
                {{--                            <th scope="col">Name</th>--}}
                {{--                            <th scope="col">Logo</th>--}}
                {{--                        </tr>--}}
                {{--                        </thead>--}}
                {{--                        <tbody>--}}
                {{--                        <tr>--}}
                {{--                            <th scope="row">1</th>--}}
                {{--                            <th scope="row">Sudan</th>--}}
                {{--                            <th scope="row"><img src="{!! asset('images/logo.png') !!}"></th>--}}
                {{--                         --}}
                {{--                        </tr>--}}
                {{--                        </tbody>--}}
                {{--                    </table>--}}
            </div>
        </div>
        </div>
    </section>

    {{--    @foreach($blog as $blog)--}}

@endsection