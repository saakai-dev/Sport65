<div class="table-responsive">
    <table class="table" id="siteReviews-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Answer</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($siteReviews as $siteReview)
            <tr>
                <td>{!! $siteReview->title !!}</td>
            <td>{!! $siteReview->answer !!}</td>
                <td>
                    {!! Form::open(['route' => ['siteReviews.destroy', $siteReview->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('siteReviews.show', [$siteReview->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('siteReviews.edit', [$siteReview->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
