<div class="table-responsive">
    <table class="table" id="matches-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Team One</th>
        <th>Team Two</th>
        <th>Image One</th>
        <th>Image Two</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            <tr>
                <td>{!! $match->title !!}</td>
            <td>{!! $match->team_one !!}</td>
            <td>{!! $match->team_two !!}</td>
            <td>{!! $match->image_one !!}</td>
            <td>{!! $match->image_two !!}</td>
                <td>
                    {!! Form::open(['route' => ['matches.destroy', $match->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('matches.show', [$match->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('matches.edit', [$match->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
