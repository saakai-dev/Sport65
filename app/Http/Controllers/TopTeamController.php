<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTopTeamRequest;
use App\Http\Requests\UpdateTopTeamRequest;
use App\Repositories\TopTeamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TopTeamController extends AppBaseController
{
    /** @var  TopTeamRepository */
    private $topTeamRepository;

    public function __construct(TopTeamRepository $topTeamRepo)
    {
        $this->topTeamRepository = $topTeamRepo;
    }

    /**
     * Display a listing of the TopTeam.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $topTeams = $this->topTeamRepository->all();

        return view('top_teams.index')
            ->with('topTeams', $topTeams);
    }

    /**
     * Show the form for creating a new TopTeam.
     *
     * @return Response
     */
    public function create()
    {
        return view('top_teams.create');
    }

    /**
     * Store a newly created TopTeam in storage.
     *
     * @param CreateTopTeamRequest $request
     *
     * @return Response
     */
    public function store(CreateTopTeamRequest $request)
    {
        $input = $request->all();

        $topTeam = $this->topTeamRepository->create($input);

        Flash::success('Top Team saved successfully.');

        return redirect(route('topTeams.index'));
    }

    /**
     * Display the specified TopTeam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $topTeam = $this->topTeamRepository->find($id);

        if (empty($topTeam)) {
            Flash::error('Top Team not found');

            return redirect(route('topTeams.index'));
        }

        return view('top_teams.show')->with('topTeam', $topTeam);
    }

    /**
     * Show the form for editing the specified TopTeam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $topTeam = $this->topTeamRepository->find($id);

        if (empty($topTeam)) {
            Flash::error('Top Team not found');

            return redirect(route('topTeams.index'));
        }

        return view('top_teams.edit')->with('topTeam', $topTeam);
    }

    /**
     * Update the specified TopTeam in storage.
     *
     * @param int $id
     * @param UpdateTopTeamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTopTeamRequest $request)
    {
        $topTeam = $this->topTeamRepository->find($id);

        if (empty($topTeam)) {
            Flash::error('Top Team not found');

            return redirect(route('topTeams.index'));
        }

        $topTeam = $this->topTeamRepository->update($request->all(), $id);

        Flash::success('Top Team updated successfully.');

        return redirect(route('topTeams.index'));
    }

    /**
     * Remove the specified TopTeam from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $topTeam = $this->topTeamRepository->find($id);

        if (empty($topTeam)) {
            Flash::error('Top Team not found');

            return redirect(route('topTeams.index'));
        }

        $this->topTeamRepository->delete($id);

        Flash::success('Top Team deleted successfully.');

        return redirect(route('topTeams.index'));
    }
}
