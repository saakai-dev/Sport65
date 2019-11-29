<?php

namespace App\Http\Controllers;

use App\Models\Ligue;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Str;

class LigueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ligues = Ligue::all();
        return view('matches.index')
            ->with('ligues', $ligues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ligue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->all();
            if ($request->hasFile('logo')) {
                $logo = $this->saveLogo($request);
                $ligue = new Ligue();
                $ligue->fill($request->all());
                $ligue->logo = $logo;
                $ligue->save();
                Flash::success('Ligue saved successfully.');
                return redirect(route('ligues.index'));
            } else {
                Ligue::create($input);
                Flash::success('Ligue saved successfully.');
                return redirect(route('ligues.index'));
            }

        } catch (Exception $exception) {
            return dd($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Ligue $ligue
     * @return Response
     */
    public function show($id)
    {
        $ligues = Ligue::find($id);

        if (empty($ligues)) {
            Flash::error('Ligue not found');

            return redirect(route('ligues.index'));
        }

        return view('ligue.show')->with('ligues', $ligues);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ligue $ligue
     * @return Response
     */
    public function edit($id)
    {
        $ligues = Ligue::find($id);

        if (empty($ligues)) {
            Flash::error('Ligue not found');

            return redirect(route('ligues.index'));
        }

        return view('ligue.edit')->with('ligues', $ligues);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Ligue $ligue
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            $ligues = Ligue::find($id);
            if (empty($ligues)) {
                Flash::error('Ligue not found');

                return redirect(route('ligues.index'));
            }
            if ($request->hasFile('logo')) {
                $file_name = $this->saveLogo($request);
                $ligues->fill($request->all());
                $ligues->logo = $file_name;
                $ligues->save();
                Flash::success('Ligue updated successfully.');
                return redirect(route('ligues.index'));
            } else {
                Ligue::update($request->all(), $id);
                Flash::success('Ligue updated successfully.');
                return redirect(route('ligues.index'));
            }

        } catch
        (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     * @throws Exception
     */
    public function destroy($id)
    {
        $ligues = Ligue::find($id);

        if (empty($ligues)) {
            Flash::error('Ligue not found');

            return redirect(route('ligues.index'));
        }

        Ligue::delete($id);

        Flash::success('Ligue deleted successfully.');

        return redirect(route('ligues.index'));
    }

    public function saveLogo($request)
    {
        $random = Str::random(10);
        if ($request->hasfile('video')) {
            $image = $request->file('video');
            $name = 'image_' . $random . ".mp4";
            $image->move(public_path() . '/video/', $name);
            $name = url("video/$name");
            return $name;
        }
        return false;
    }

}
