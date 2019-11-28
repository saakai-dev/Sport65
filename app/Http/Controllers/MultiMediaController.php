<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMultiMediaRequest;
use App\Http\Requests\UpdateMultiMediaRequest;
use App\Repositories\MultiMediaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MultiMediaController extends AppBaseController
{
    /** @var  MultiMediaRepository */
    private $multiMediaRepository;

    public function __construct(MultiMediaRepository $multiMediaRepo)
    {
        $this->multiMediaRepository = $multiMediaRepo;
    }

    /**
     * Display a listing of the MultiMedia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $multiMedia = $this->multiMediaRepository->all();

        return view('multi_media.index')
            ->with('multiMedia', $multiMedia);
    }

    /**
     * Show the form for creating a new MultiMedia.
     *
     * @return Response
     */
    public function create()
    {
        return view('multi_media.create');
    }

    /**
     * Store a newly created MultiMedia in storage.
     *
     * @param CreateMultiMediaRequest $request
     *
     * @return Response
     */
    public function store(CreateMultiMediaRequest $request)
    {
        $input = $request->all();

        $multiMedia = $this->multiMediaRepository->create($input);

        Flash::success('Multi Media saved successfully.');

        return redirect(route('multiMedia.index'));
    }

    /**
     * Display the specified MultiMedia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $multiMedia = $this->multiMediaRepository->find($id);

        if (empty($multiMedia)) {
            Flash::error('Multi Media not found');

            return redirect(route('multiMedia.index'));
        }

        return view('multi_media.show')->with('multiMedia', $multiMedia);
    }

    /**
     * Show the form for editing the specified MultiMedia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $multiMedia = $this->multiMediaRepository->find($id);

        if (empty($multiMedia)) {
            Flash::error('Multi Media not found');

            return redirect(route('multiMedia.index'));
        }

        return view('multi_media.edit')->with('multiMedia', $multiMedia);
    }

    /**
     * Update the specified MultiMedia in storage.
     *
     * @param int $id
     * @param UpdateMultiMediaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMultiMediaRequest $request)
    {
        $multiMedia = $this->multiMediaRepository->find($id);

        if (empty($multiMedia)) {
            Flash::error('Multi Media not found');

            return redirect(route('multiMedia.index'));
        }

        $multiMedia = $this->multiMediaRepository->update($request->all(), $id);

        Flash::success('Multi Media updated successfully.');

        return redirect(route('multiMedia.index'));
    }

    /**
     * Remove the specified MultiMedia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $multiMedia = $this->multiMediaRepository->find($id);

        if (empty($multiMedia)) {
            Flash::error('Multi Media not found');

            return redirect(route('multiMedia.index'));
        }

        $this->multiMediaRepository->delete($id);

        Flash::success('Multi Media deleted successfully.');

        return redirect(route('multiMedia.index'));
    }
}
