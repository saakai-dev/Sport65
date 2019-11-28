<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Contents</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{!! Str::limit($blog->title, '50') !!}</td>
            <td>{!! Str::limit($blog->contents, 200) !!}</td>
            <td><img src="{!! $blog->image !!}" width="100px" height="50px"></td>
                <td>
                    {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('blogs.show', [$blog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('blogs.edit', [$blog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
