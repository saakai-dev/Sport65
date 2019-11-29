<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMultiMediaRequest;
use App\Http\Requests\UpdateMultiMediaRequest;
use App\Models\MultiMedia;
use App\Repositories\MultiMediaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Str;

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
        try {
            $input = $request->all();
            if ($request->hasFile('video')) {
                $file_name = $this->saveFile($request);
                $profile = new MultiMedia();
                $profile->fill($request->all());
                $profile->video = $file_name;
                $profile->save();
                Flash::success('video saved successfully.');
                return redirect(route('multiMedia.index'));
            } else {
                $profile = $this->multiMediaRepository->create($input);
                Flash::success('video saved successfully.');
                return redirect(route('multiMedia.index'));
            }

        } catch (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
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
        try {
            $blog = $this->multiMediaRepository->find($id);
            if (empty($blog)) {
                Flash::error('Video not found');

                return redirect(route('multiMedia.index'));
            }
            if ($request->hasFile('video')) {
                $file_name = $this->saveFile($request);
                $blog->fill($request->all());
                $blog->video = $file_name;
                $blog->save();
                Flash::success('Video updated successfully.');
                return redirect(route('multiMedia.index'));
            } else {
                $this->multiMediaRepository->update($request->all(), $id);
                Flash::success('Video updated successfully.');
                return redirect(route('multiMedia.index'));
            }

        } catch
        (\Exception $exception) {
            return response()->json(["message" => $exception->getMessage(), 'status' => false]);
        }
    }

    /**
     * Remove the specified MultiMedia from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
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

    public function saveFile($request)
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
