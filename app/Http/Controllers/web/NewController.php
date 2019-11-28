<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateNewRequest;
use App\Http\Requests\UpdateNewRequest;
use App\Repositories\NewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NewController extends AppBaseController
{
    /** @var  NewRepository */
    private $newRepository;

    public function __construct(NewRepository $newRepo)
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
    public function index(Request $request)
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
        return view('news.create');
    }

    /**
     * Store a newly created New in storage.
     *
     * @param CreateNewRequest $request
     *
     * @return Response
     */
    public function store(CreateNewRequest $request)
    {
        $input = $request->all();

        $new = $this->newRepository->create($input);

        Flash::success('New saved successfully.');

        return redirect(route('news.index'));
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

            return redirect(route('news.index'));
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

            return redirect(route('news.index'));
        }

        return view('news.edit')->with('new', $new);
    }

    /**
     * Update the specified New in storage.
     *
     * @param int $id
     * @param UpdateNewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewRequest $request)
    {
        $new = $this->newRepository->find($id);

        if (empty($new)) {
            Flash::error('New not found');

            return redirect(route('news.index'));
        }

        $new = $this->newRepository->update($request->all(), $id);

        Flash::success('New updated successfully.');

        return redirect(route('news.index'));
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

            return redirect(route('news.index'));
        }

        $this->newRepository->delete($id);

        Flash::success('New deleted successfully.');

        return redirect(route('news.index'));
    }
}
