<!-- Team Field -->
<div class="form-group col-sm-6">
    {!! Form::label('team', 'Team:') !!}
    {!! Form::text('team', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::file('logo') !!}
</div>
<div class="clearfix"></div>

<!-- Point Field -->
<div class="form-group col-sm-6">
    {!! Form::label('point', 'Point:') !!}
    {!! Form::number('point', null, ['class' => 'form-control']) !!}
</div>

<!-- Win Field -->
<div class="form-group col-sm-6">
    {!! Form::label('win', 'Win:') !!}
    {!! Form::number('win', null, ['class' => 'form-control']) !!}
</div>

<!-- Lose Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lose', 'Lose:') !!}
    {!! Form::number('lose', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('points.index') !!}" class="btn btn-default">Cancel</a>
</div>
