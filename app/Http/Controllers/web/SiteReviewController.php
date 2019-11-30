<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateSiteReviewRequest;
use App\Http\Requests\UpdateSiteReviewRequest;
use App\Models\VoteReview;
use App\Repositories\SiteReviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SiteReviewController extends AppBaseController
{
    /** @var  SiteReviewRepository */
    private $siteReviewRepository;

    public function __construct(SiteReviewRepository $siteReviewRepo)
    {
        $this->siteReviewRepository = $siteReviewRepo;
    }

    /**
     * Display a listing of the SiteReview.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $siteReviews = $this->siteReviewRepository->all();

        return view('site_reviews.index')
            ->with('siteReviews', $siteReviews);
    }

    /**
     * Show the form for creating a new SiteReview.
     *
     * @return Response
     */
    public function create()
    {
        return view('site_reviews.create');
    }

    /**
     * Store a newly created SiteReview in storage.
     *
     * @param CreateSiteReviewRequest $request
     *
     * @return Response
     */
    public function store(CreateSiteReviewRequest $request)
    {
        $input = $request->all();

        $siteReview = $this->siteReviewRepository->create($input);

        Flash::success('Site Review saved successfully.');

        return redirect(route('siteReviews.index'));
    }

    /**
     * Display the specified SiteReview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $siteReview = $this->siteReviewRepository->find($id);

        if (empty($siteReview)) {
            Flash::error('Site Review not found');

            return redirect(route('siteReviews.index'));
        }

        return view('site_reviews.show')->with('siteReview', $siteReview);
    }

    /**
     * Show the form for editing the specified SiteReview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $siteReview = $this->siteReviewRepository->find($id);

        if (empty($siteReview)) {
            Flash::error('Site Review not found');

            return redirect(route('siteReviews.index'));
        }

        return view('site_reviews.edit')->with('siteReview', $siteReview);
    }

    /**
     * Update the specified SiteReview in storage.
     *
     * @param int $id
     * @param UpdateSiteReviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSiteReviewRequest $request)
    {
        $siteReview = $this->siteReviewRepository->find($id);

        if (empty($siteReview)) {
            Flash::error('Site Review not found');

            return redirect(route('siteReviews.index'));
        }

        $siteReview = $this->siteReviewRepository->update($request->all(), $id);

        Flash::success('Site Review updated successfully.');

        return redirect(route('siteReviews.index'));
    }

    /**
     * Remove the specified SiteReview from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $siteReview = $this->siteReviewRepository->find($id);

        if (empty($siteReview)) {
            Flash::error('Site Review not found');

            return redirect(route('siteReviews.index'));
        }

        $this->siteReviewRepository->delete($id);

        Flash::success('Site Review deleted successfully.');

        return redirect(route('siteReviews.index'));
    }


    /**
     * @param Request $request
     * @return VoteReview
     * @throws \Exception
     */
    public function gustVote(Request $request)
    {
        $vote = new VoteReview();
        $vote->site_reviews_id = 1;
        $vote->vote = $request->answer;
//        $vote->vote = random_int(1,3);
        $vote->save();
        Flash::success('Vote successfully.');

        return redirect(route('page'));

    }

    public function getVote()
    {
        return $votes = VoteReview::all();
    }
}
