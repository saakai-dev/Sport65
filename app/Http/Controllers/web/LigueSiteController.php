<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\AppBaseController;
use App\Models\Ligue;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LigueSiteController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ligue = Ligue::paginate();

        return view('web.ligue')
            ->with('ligue', $ligue);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Ligue $ligue
     * @return Response
     */
    public function show(Ligue $ligue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Ligue $ligue
     * @return Response
     */
    public function edit(Ligue $ligue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ligue $ligue
     * @return Response
     */
    public function update(Request $request, Ligue $ligue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Ligue $ligue
     * @return Response
     */
    public function destroy(Ligue $ligue)
    {
        //
    }
}
