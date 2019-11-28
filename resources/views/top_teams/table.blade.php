<div class="table-responsive">
    <table class="table" id="topTeams-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Logo</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($topTeams as $topTeam)
            <tr>
                <td>{!! $topTeam->name !!}</td>
            <td>{!! $topTeam->logo !!}</td>
            <td>{!! $topTeam->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['topTeams.destroy', $topTeam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('topTeams.show', [$topTeam->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('topTeams.edit', [$topTeam->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
