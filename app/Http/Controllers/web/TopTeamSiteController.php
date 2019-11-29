<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateTopTeamRequest;
use App\Http\Requests\UpdateTopTeamRequest;
use App\Models\TopTeam;
use App\Repositories\TopTeamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
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
        try {
            $input = $request->all();
            if ($request->hasFile('logo')) {
                $file_name = $this->saveFile($request);
                $topTeam = new TopTeam();
                $topTeam->fill($request->all());
                $topTeam->logo = $file_name;
                $topTeam->save();
                Flash::success('top Team saved successfully.');
                return redirect(route('topTeams.index'));
            } else {
                $this->topTeamRepository->create($input);
                Flash::success('topTeam saved successfully.');
                return redirect(route('topTeams.index'));
            }

        } catch (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
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
        try {
            $topTeam = $this->topTeamRepository->find($id);
            if (empty($topTeam)) {
                Flash::error('Top Team not found');

                return redirect(route('topTeams.index'));
            }
            if ($request->hasFile('logo')) {
                $file_name = $this->saveFile($request);
                $topTeam->fill($request->all());
                $topTeam->logo = $file_name;
                $topTeam->save();
                Flash::success('Top Team updated successfully.');
                return redirect(route('topTeams.index'));
            } else {
                $this->topTeamRepository->update($request->all(), $id);
                Flash::success('Top Team updated successfully.');
                return redirect(route('topTeams.index'));
            }

        } catch
        (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
    }

    /**
     * Remove the specified TopTeam from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
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

    public function saveFile($request)
    {
        $random = Str::random(10);
        if ($request->hasfile('logo')) {
            $image = $request->file('logo');
            $name = 'image_' . $random . ".png";
            $image->move(public_path() . '/topTeam/', $name);
            $name = url("topTeam/$name");
            return $name;
        }
        return false;
    }

}
