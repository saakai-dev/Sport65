<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMatchFutureRequest;
use App\Http\Requests\UpdateMatchFutureRequest;
use App\Repositories\MatchFutureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MatchFutureController extends AppBaseController
{
    /** @var  MatchFutureRepository */
    private $matchFutureRepository;

    public function __construct(MatchFutureRepository $matchFutureRepo)
    {
        $this->matchFutureRepository = $matchFutureRepo;
    }

    /**
     * Display a listing of the MatchFuture.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $matchFutures = $this->matchFutureRepository->all();

        return view('match_futures.index')
            ->with('matchFutures', $matchFutures);
    }

    /**
     * Show the form for creating a new MatchFuture.
     *
     * @return Response
     */
    public function create()
    {
        return view('match_futures.create');
    }

    /**
     * Store a newly created MatchFuture in storage.
     *
     * @param CreateMatchFutureRequest $request
     *
     * @return Response
     */
    public function store(CreateMatchFutureRequest $request)
    {
        $input = $request->all();

        $matchFuture = $this->matchFutureRepository->create($input);

        Flash::success('Match Future saved successfully.');

        return redirect(route('matchFutures.index'));
    }

    /**
     * Display the specified MatchFuture.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $matchFuture = $this->matchFutureRepository->find($id);

        if (empty($matchFuture)) {
            Flash::error('Match Future not found');

            return redirect(route('matchFutures.index'));
        }

        return view('match_futures.show')->with('matchFuture', $matchFuture);
    }

    /**
     * Show the form for editing the specified MatchFuture.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $matchFuture = $this->matchFutureRepository->find($id);

        if (empty($matchFuture)) {
            Flash::error('Match Future not found');

            return redirect(route('matchFutures.index'));
        }

        return view('match_futures.edit')->with('matchFuture', $matchFuture);
    }

    /**
     * Update the specified MatchFuture in storage.
     *
     * @param int $id
     * @param UpdateMatchFutureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMatchFutureRequest $request)
    {
        $matchFuture = $this->matchFutureRepository->find($id);

        if (empty($matchFuture)) {
            Flash::error('Match Future not found');

            return redirect(route('matchFutures.index'));
        }

        $matchFuture = $this->matchFutureRepository->update($request->all(), $id);

        Flash::success('Match Future updated successfully.');

        return redirect(route('matchFutures.index'));
    }

    /**
     * Remove the specified MatchFuture from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $matchFuture = $this->matchFutureRepository->find($id);

        if (empty($matchFuture)) {
            Flash::error('Match Future not found');

            return redirect(route('matchFutures.index'));
        }

        $this->matchFutureRepository->delete($id);

        Flash::success('Match Future deleted successfully.');

        return redirect(route('matchFutures.index'));
    }
}
