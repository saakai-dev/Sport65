<?php

namespace App\Http\Controllers\Web;

use App\Repositories\TopTeamRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Response;
use Str;

class TopTeamSiteController extends AppBaseController
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
     * @return Response
     */
    public function index()
    {
        $topTeams = $this->topTeamRepository->paginate(6);

        return view('web.team')
            ->with('topTeams', $topTeams);
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

            return redirect(route('Teams.edit'));
        }

        return view('web.team.show')->with('topTeam', $topTeam);
    }


}
