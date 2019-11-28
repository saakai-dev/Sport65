<div class="table-responsive">
    <table class="table" id="multiMedia-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Video</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($multiMedia as $multiMedia)
            <tr>
                <td>{!! $multiMedia->title !!}</td>
            <td>{!! $multiMedia->video !!}</td>
                <td>
                    {!! Form::open(['route' => ['multiMedia.destroy', $multiMedia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('multiMedia.show', [$multiMedia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('multiMedia.edit', [$multiMedia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
