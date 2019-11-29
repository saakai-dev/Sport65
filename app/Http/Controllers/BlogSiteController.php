<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Match;
use App\Models\Point;
use App\Repositories\BlogRepository;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogSiteController extends AppBaseController
{
    /** @var  BlogRepository */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blog = $this->blogRepository->paginate(10);
        $Point = Point::orderBy('created_at', 'ASC')->paginate(7);
        $Matches = Match::orderBy('created_at', 'ASC')->get();

        return view('web.blog',['blog'=>$blog,
            'Matches'=>$Matches,
            'Point'=>$Point]);
    }


    public function show($id)
    {
        $check = Auth::user()->favorites()->where('blog_id', $id)->first();
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('p_blog'));
        }
        if (empty($check)) {
            $check = 0;
            return view('web.blogContent', ['blog' => $blog, 'check' => $check]);
        }
        return view('web.blogContent', ['blog' => $blog, 'check' => 1]);

    }


    /**
     * Favorite a particular post
     *
     * @param Blog $blog
     * @return Response
     */
    public function favoritePost(Request $request, $id)
    {
        Auth::user()->favorites()->attach($id);

        return back();
    }
//    function favoritePost(Blog $blog)
//    {
//        Auth::user()->favorites()->attach($blog->id);
//
//        return back();
//    }

    /**
     * Unfavorite a particular post
     *
     * @param Blog $blog
     * @return Response
     */
    public function unFavoritePost(Blog $blog)
    {
        Auth::user()->favorites()->detach($blog->id);

        return back();
    }
}
