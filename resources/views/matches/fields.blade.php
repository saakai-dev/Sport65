<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Team One Field -->
<div class="form-group col-sm-6">
    {!! Form::label('team_one', 'Team One:') !!}
    {!! Form::text('team_one', null, ['class' => 'form-control']) !!}
</div>

<!-- Team Two Field -->
<div class="form-group col-sm-6">
    {!! Form::label('team_two', 'Team Two:') !!}
    {!! Form::text('team_two', null, ['class' => 'form-control']) !!}
</div>

<!-- Image One Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_one', 'Image One:') !!}
    {!! Form::file('image_one') !!}
</div>
<div class="clearfix"></div>

<!-- Image Two Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_two', 'Image Two:') !!}
    {!! Form::file('image_two') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('matches.index') !!}" class="btn btn-default">Cancel</a>
</div>
