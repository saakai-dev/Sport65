<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Match;
use App\Models\MultiMedia;
use App\Models\News;
use App\Models\Point;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
    public function index()
    {
        $toDay = Carbon::today();
        $toMorrow = Carbon::tomorrow();
//        $match_today = Match::orderByDesc('match_date')->get()->first();
        $match_today = Match::where('match_date', $toDay)
            ->orWhere('match_date', $toMorrow)
            ->get()->first();
        $news = News::paginate(5);
        $blogs = Blog::paginate(5);
        $Matches = Match::orderBy('created_at', 'ASC')->get();
        $Point = Point::orderBy('created_at', 'ASC')->paginate(7);
        $most = Blog::all(['title', 'id']);
        $video = MultiMedia::first();
//        return view('web.index', compact(['match_today', 'news', 'blog']));
        return view('web.index', [
            'match_today' => $match_today,
            'news' => $news,
            'blogs' => $blogs,
            'most' => $most,
            'Matches' => $Matches,
            'video' => $video,
            'Point' => $Point
        ]);
//        return view('web.index', ['About'=>'AboutAbout']);
    }
}
