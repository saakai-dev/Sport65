<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use App\Http\Controllers\AppBaseController;
use Auth;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Str;
use Response;

class BlogController extends AppBaseController
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
        $blogs = $this->blogRepository->all();

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request)
    {
        try {
            $input = $request->all();
            $user = Auth::user()->id;
            if ($request->hasFile('image')) {
                $file_name = $this->saveFile($request);
                $profile = new Blog();
                $profile->fill($request->all());
                $profile->image = $file_name;
                $profile->user_id = $user;
                $profile->save();
                Flash::success('Blog saved successfully.');
                return redirect(route('blogs.index'));
            } else {
                $profile = $this->blogRepository->create($input);
                Flash::success('Blog saved successfully.');
                return redirect(route('blogs.index'));
            }

        } catch (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }

    }

    /**
     * Display the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param int $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request)
    {

        try {
            $user = Auth::user()->id;
            $blog = $this->blogRepository->find($id);
            if (empty($blog)) {
                Flash::error('Blog not found');

                return redirect(route('blogs.index'));
            }
            if ($request->hasFile('image')) {
                $file_name = $this->saveFile($request);
                $blog->fill($request->all());
                $blog->image = $file_name;
                $blog->user_id = $user;
                $blog->save();
                Flash::success('Blog updated successfully.');
                return redirect(route('blogs.index'));
            } else {
                $this->blogRepository->update($request->all(), $id);
                Flash::success('Blog updated successfully.');
                return redirect(route('blogs.index'));
            }

        } catch
        (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }

    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }


    public function saveFile($request)
    {
        $random = Str::random(10);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = 'image_' . $random . ".jpg";
            $image->move(public_path() . '/blog/', $name);
            $name = url("blog/$name");
            return $name;
        }
        return false;
    }
}
