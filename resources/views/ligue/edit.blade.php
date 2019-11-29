@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ligues
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($ligues, ['route' => ['ligues.update', $ligues->id], 'method' => 'patch', 'files' => true]) !!}

                    @include('ligue.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection