<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $match->title !!}</p>
</div>

<!-- Team One Field -->
<div class="form-group">
    {!! Form::label('team_one', 'Team One:') !!}
    <p>{!! $match->team_one !!}</p>
</div>

<!-- Team Two Field -->
<div class="form-group">
    {!! Form::label('team_two', 'Team Two:') !!}
    <p>{!! $match->team_two !!}</p>
</div>

<!-- Image One Field -->
<div class="form-group">
    {!! Form::label('image_one', 'Image One:') !!}
    <p>{!! $match->image_one !!}</p>
</div>

<!-- Image Two Field -->
<div class="form-group">
    {!! Form::label('image_two', 'Image Two:') !!}
    <p>{!! $match->image_two !!}</p>
</div>

<!-- Match Date Field -->
<div class="form-group">
    {!! Form::label('match_date', 'Match Date:') !!}
    <p>{!! $match->match_date !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $match->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $match->updated_at !!}</p>
</div>

