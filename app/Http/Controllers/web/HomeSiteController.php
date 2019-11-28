<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Match;
use App\Models\News;
use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
    public function index()
    {
        $match_today = Match::orderByDesc('match_date')->get()->first();
        $news = News::all();
        $blog = Blog::all();
        $most = Blog::all(['title', 'id']);
//        return view('web.index', compact(['match_today', 'news', 'blog']));
        return view('web.index', [
            'match_today' => $match_today,
            'news' => $news,
            'blog' => $blog,
            'most' => $most
        ]);
//        return view('web.index', ['About'=>'AboutAbout']);
    }
}
