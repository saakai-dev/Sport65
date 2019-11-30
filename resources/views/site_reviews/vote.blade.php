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
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table" id="siteReviews-table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Answer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Votes as $vote)
                            <tr>
                                <td>{!! $vote->title !!}</td>
                                <td>{!! $vote->answer !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

