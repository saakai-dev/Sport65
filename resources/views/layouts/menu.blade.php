
<li class="{{ Request::is('blogs*') ? 'active' : '' }}">
    <a href="{!! route('blogs.index') !!}"><i class="fa fa-edit"></i><span>Blogs</span></a>
</li>

<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a href="{!! route('news66.index') !!}"><i class="fa fa-edit"></i><span>News</span></a>
</li>

<li class="{{ Request::is('matches*') ? 'active' : '' }}">
    <a href="{!! route('matches.index') !!}"><i class="fa fa-edit"></i><span>Matches</span></a>
</li>

<li class="{{ Request::is('matchFutures*') ? 'active' : '' }}">
    <a href="{!! route('matchFutures.index') !!}"><i class="fa fa-edit"></i><span>Match Futures</span></a>
</li>

<li class="{{ Request::is('siteReviews*') ? 'active' : '' }}">
    <a href="{!! route('siteReviews.index') !!}"><i class="fa fa-edit"></i><span>Site Reviews</span></a>
</li>

<li class="{{ Request::is('points*') ? 'active' : '' }}">
    <a href="{!! route('points.index') !!}"><i class="fa fa-edit"></i><span>Points</span></a>
</li>

