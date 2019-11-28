<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Contents</th>
        <th>Image</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
            <tr>
                <td>{!! $new->name !!}</td>
            <td>{!! $new->contents !!}</td>
            <td>{!! $new->image !!}</td>
            <td>{!! $new->user_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['news.destroy', $new->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('news.show', [$new->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('news.edit', [$new->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
