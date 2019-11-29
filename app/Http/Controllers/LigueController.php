<?php

namespace App\Http\Controllers;

use App\Models\Ligue;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
                $this->matchRepository->create($input);
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
    public function show(Ligue $ligue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ligue $ligue
     * @return Response
     */
    public function edit(Ligue $ligue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Ligue $ligue
     * @return Response
     */
    public function update(Request $request, Ligue $ligue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ligue $ligue
     * @return Response
     */
    public function destroy(Ligue $ligue)
    {
        //
    }
}
