<?php

namespace App\Repositories;

use App\Models\SiteReview;
use App\Repositories\BaseRepository;

/**
 * Class SiteReviewRepository
 * @package App\Repositories
 * @version November 28, 2019, 11:10 am UTC
*/

class SiteReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'answer'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SiteReview::class;
    }
}
