<div class="table-responsive">
    <table class="table" id="points-table">
        <thead>
            <tr>
                <th>Team</th>
        <th>Logo</th>
        <th>Point</th>
        <th>Win</th>
        <th>Lose</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($points as $point)
            <tr>
                <td>{!! $point->team !!}</td>
            <td>{!! $point->logo !!}</td>
            <td>{!! $point->point !!}</td>
            <td>{!! $point->win !!}</td>
            <td>{!! $point->lose !!}</td>
                <td>
                    {!! Form::open(['route' => ['points.destroy', $point->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('points.show', [$point->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('points.edit', [$point->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
