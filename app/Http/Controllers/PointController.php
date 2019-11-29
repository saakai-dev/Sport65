<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePointRequest;
use App\Http\Requests\UpdatePointRequest;
use App\Models\Point;
use App\Repositories\PointRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Str;

class PointController extends AppBaseController
{
    /** @var  PointRepository */
    private $pointRepository;

    public function __construct(PointRepository $pointRepo)
    {
        $this->pointRepository = $pointRepo;
    }

    /**
     * Display a listing of the Point.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $points = $this->pointRepository->all();

        return view('points.index')
            ->with('points', $points);
    }

    /**
     * Show the form for creating a new Point.
     *
     * @return Response
     */
    public function create()
    {
        return view('points.create');
    }

    /**
     * Store a newly created Point in storage.
     *
     * @param CreatePointRequest $request
     *
     * @return Response
     */
    public function store(CreatePointRequest $request)
    {
        try {
            $input = $request->all();
            if ($request->hasFile('logo')) {
                $file_name = $this->saveFile($request);
                $profile = new Point();
                $profile->fill($request->all());
                $profile->logo = $file_name;
                $profile->save();
                Flash::success('Point saved successfully.');
                return redirect(route('points.index'));
            } else {
                $profile = $this->pointRepository->create($input);
                Flash::success('Point saved successfully.');
                return redirect(route('points.index'));
            }

        } catch (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
    }

    /**
     * Display the specified Point.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $point = $this->pointRepository->find($id);

        if (empty($point)) {
            Flash::error('Point not found');

            return redirect(route('points.index'));
        }

        return view('points.show')->with('point', $point);
    }

    /**
     * Show the form for editing the specified Point.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $point = $this->pointRepository->find($id);

        if (empty($point)) {
            Flash::error('Point not found');

            return redirect(route('points.index'));
        }

        return view('points.edit')->with('point', $point);
    }

    /**
     * Update the specified Point in storage.
     *
     * @param int $id
     * @param UpdatePointRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePointRequest $request)
    {

        try {
            $blog = $this->pointRepository->find($id);
            if (empty($blog)) {
                Flash::error('Point not found');

                return redirect(route('points.index'));
            }
            if ($request->hasFile('logo')) {
                $file_name = $this->saveFile($request);
                $blog->fill($request->all());
                $blog->logo = $file_name;
                $blog->save();
                Flash::success('Point updated successfully.');
                return redirect(route('points.index'));
            } else {
                $this->pointRepository->update($request->all(), $id);
                Flash::success('Point updated successfully.');
                return redirect(route('points.index'));
            }

        } catch
        (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }


    }

    /**
     * Remove the specified Point from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $point = $this->pointRepository->find($id);

        if (empty($point)) {
            Flash::error('Point not found');

            return redirect(route('points.index'));
        }

        $this->pointRepository->delete($id);

        Flash::success('Point deleted successfully.');

        return redirect(route('points.index'));
    }

    public function saveFile($request)
    {
        $random = Str::random(10);
        if ($request->hasfile('logo')) {
            $image = $request->file('logo');
            $name = 'image_' . $random . ".png";
            $image->move(public_path() . '/point/', $name);
            $name = url("point/$name");
            return $name;
        }
        return false;
    }

}
