<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateMatchRequest;
use App\Http\Requests\UpdateMatchRequest;
use App\Models\Match;
use App\Repositories\MatchRepository;
use App\Http\Controllers\AppBaseController;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Response;
use Str;

class MatchController extends AppBaseController
{
    /** @var  MatchRepository */
    private $matchRepository;

    public function __construct(MatchRepository $matchRepo)
    {
        $this->matchRepository = $matchRepo;
    }

    /**
     * Display a listing of the Match.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $matches = $this->matchRepository->all();

        return view('matches.index')
            ->with('matches', $matches);
    }

    /**
     * Show the form for creating a new Match.
     *
     * @return Response
     */
    public function create()
    {
        return view('matches.create');
    }

    /**
     * Store a newly created Match in storage.
     *
     * @param CreateMatchRequest $request
     *
     * @return Response
     */
    public function store(CreateMatchRequest $request)
    {

//        try {
            $input = $request->all();
            if ($request->hasFile('image_one')) {
                $file_one = $this->saveImageOne($request);
                $file_two = $this->saveImageTwo($request);
                $profile = new Match();
                $profile->fill($request->all());
                $profile->image_one = $file_one;
                $profile->image_two = $file_two;
                $profile->save();
                Flash::success('Match saved successfully.');
                return redirect(route('matches.index'));
            } else {
                $profile = $this->matchRepository->create($input);
                Flash::success('Match saved successfully.');
                return redirect(route('matches.index'));
            }

//        } catch (\Exception $exception) {
//            return dd($exception);
//        }
    }

    /**
     * Display the specified Match.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $match = $this->matchRepository->find($id);

        if (empty($match)) {
            Flash::error('Match not found');

            return redirect(route('matches.index'));
        }

        return view('matches.show')->with('match', $match);
    }

    /**
     * Show the form for editing the specified Match.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $match = $this->matchRepository->find($id);

        if (empty($match)) {
            Flash::error('Match not found');

            return redirect(route('matches.index'));
        }

        return view('matches.edit')->with('match', $match);
    }

    /**
     * Update the specified Match in storage.
     *
     * @param int $id
     * @param UpdateMatchRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMatchRequest $request)
    {

        try {
            $match = $this->matchRepository->find($id);
            if (empty($match)) {
                Flash::error('Match not found');

                return redirect(route('matches.index'));
            }
            if ($request->hasFile('image_one')) {
                $file_nameOne = $this->saveImageOne($request);
                $match->fill($request->all());
                $match->image_one = $file_nameOne;
                $match->save();
                Flash::success('Match updated successfully.');
                return redirect(route('matches.index'));
            }
            if ($request->hasFile('image_two')) {
                $file_nameTwo = $this->saveImageTwo($request);
                $match->fill($request->all());
                $match->image_two = $file_nameTwo;
                $match->save();
                Flash::success('Match updated successfully.');
                return redirect(route('matches.index'));
            }
            if ($request->hasFile('image_one') and $request->hasFile('image_two')) {
                $file_nameOne = $this->saveImageOne($request);
                $file_nameTwo = $this->saveImageTwo($request);
                $match->fill($request->all());
                $match->image_one = $file_nameOne;
                $match->image_two = $file_nameTwo;
                $match->save();
                Flash::success('Match updated successfully.');
                return redirect(route('matches.index'));
            } else {
                $this->matchRepository->update($request->all(), $id);
                Flash::success('Match updated successfully.');
                return redirect(route('matches.index'));
            }

        } catch
        (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
    }


    /**
     * Remove the specified Match from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $match = $this->matchRepository->find($id);

        if (empty($match)) {
            Flash::error('Match not found');

            return redirect(route('matches.index'));
        }

        $this->matchRepository->delete($id);

        Flash::success('Match deleted successfully.');

        return redirect(route('matches.index'));
    }

    public function saveImageOne($request)
    {
        $random = Str::random(10);
        if ($request->hasfile('image_one')) {
            $image = $request->file('image_one');
            $name = 'image_' . $random . ".jpg";
            $image->move(public_path() . '/match/', $name);
            $name = url("match/$name");
            return $name;
        }
        return false;
    }

    public function saveImageTwo($request)
    {
        $random = Str::random(10);
        if ($request->hasfile('image_two')) {
            $image = $request->file('image_two');
            $name = 'image_' . $random . ".jpg";
            $image->move(public_path() . '/match/', $name);
            $name = url("match/$name");
            return $name;
        }
        return false;
    }
}
