<?php

namespace App\Repositories;

use App\Models\MatchFuture;
use App\Repositories\BaseRepository;

/**
 * Class MatchFutureRepository
 * @package App\Repositories
 * @version November 28, 2019, 11:08 am UTC
*/

class MatchFutureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'team_one',
        'team_two',
        'image_one',
        'image_two'
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
        return MatchFuture::class;
    }
}
