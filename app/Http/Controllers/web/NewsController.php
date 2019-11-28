<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Http\Controllers\AppBaseController;
use App\Repositories\NewsRepository;
use Auth;
use Illuminate\Http\Request;
use Flash;
use Response;
use Str;

class NewsController extends AppBaseController
{
    /** @var  NewsRepository */
    private $newRepository;

    public function __construct(NewsRepository $newRepo)
    {
        $this->newRepository = $newRepo;
    }

    /**
     * Display a listing of the New.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index()
    {
        $news = $this->newRepository->all();

        return view('news.index')
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new New.
     *
     * @return Response
     */
    public function create()
    {
        return view('news66.create');
    }

    /**
     * Store a newly created New in storage.
     *
     * @param CreateNewsRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsRequest $request)
    {
        try {
            $input = $request->all();
            $user = Auth::user()->id;
            if ($request->hasFile('image')) {
                $file_name = $this->saveFile($request);
                $profile = new News();
                $profile->fill($request->all());
                $profile->image = $file_name;
                $profile->user_id = $user;
                $profile->save();
                Flash::success('News saved successfully.');
                return redirect(route('news.index'));
            } else {
                $profile = $this->newRepository->create($input);
                Flash::success('News saved successfully.');
                return redirect(route('news.index'));
            }

        } catch (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
    }

    /**
     * Display the specified New.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $new = $this->newRepository->find($id);

        if (empty($new)) {
            Flash::error('New not found');

            return redirect(route('news66.index'));
        }

        return view('news.show')->with('new', $new);
    }

    /**
     * Show the form for editing the specified New.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $new = $this->newRepository->find($id);

        if (empty($new)) {
            Flash::error('New not found');

            return redirect(route('news66.index'));
        }

        return view('news.edit')->with('new', $new);
    }

    /**
     * Update the specified New in storage.
     *
     * @param int $id
     * @param UpdateNewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsRequest $request)
    {
        try {
            $user = Auth::user()->id;
            $blog = $this->newRepository->find($id);
            if (empty($blog)) {
                Flash::error('News not found');

                return redirect(route('news66.index'));
            }
            if ($request->hasFile('image')) {
                $file_name = $this->saveFile($request);
                $blog->fill($request->all());
                $blog->image = $file_name;
                $blog->user_id = $user;
                $blog->save();
                Flash::success('News updated successfully.');
                return redirect(route('news66.index'));
            } else {
                $this->blogRepository->update($request->all(), $id);
                Flash::success('News updated successfully.');
                return redirect(route('news66.index'));
            }

        } catch
        (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
    }

    /**
     * Remove the specified New from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $new = $this->newRepository->find($id);

        if (empty($new)) {
            Flash::error('New not found');

            return redirect(route('news66.index'));
        }

        $this->newRepository->delete($id);

        Flash::success('New deleted successfully.');

        return redirect(route('news66.index'));
    }

    public function saveFile($request)
    {
        $random = Str::random(10);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = 'image_' . $random . ".jpg";
            $image->move(public_path() . '/news/', $name);
            $name = url("news/$name");
            return $name;
        }
        return false;
    }
}
