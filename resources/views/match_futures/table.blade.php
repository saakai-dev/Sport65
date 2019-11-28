<div class="table-responsive">
    <table class="table" id="matchFutures-table">
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
        @foreach($matchFutures as $matchFuture)
            <tr>
                <td>{!! $matchFuture->title !!}</td>
            <td>{!! $matchFuture->team_one !!}</td>
            <td>{!! $matchFuture->team_two !!}</td>
            <td>{!! $matchFuture->image_one !!}</td>
            <td>{!! $matchFuture->image_two !!}</td>
                <td>
                    {!! Form::open(['route' => ['matchFutures.destroy', $matchFuture->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('matchFutures.show', [$matchFuture->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('matchFutures.edit', [$matchFuture->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
