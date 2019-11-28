<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $multiMedia->title !!}</p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <p>{!! $multiMedia->video !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $multiMedia->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $multiMedia->updated_at !!}</p>
</div>

