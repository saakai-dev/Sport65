<div class="table-responsive">
    <table class="table" id="title-table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Logo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ligues as $ligue)
            <tr>
                <td>{!! $ligue->title !!}</td>
                <td><img src="{!! $ligue->logo !!}" height="60px" width="60px"></td>
                <td>
                    {!! Form::open(['route' => ['ligues.destroy', $ligue->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('topTeams.show', [$ligue->id]) !!}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('topTeams.edit', [$ligue->id]) !!}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>',
                         ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
