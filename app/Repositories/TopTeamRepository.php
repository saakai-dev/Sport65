<?php

namespace App\Repositories;

use App\Models\TopTeam;
use App\Repositories\BaseRepository;

/**
 * Class TopTeamRepository
 * @package App\Repositories
 * @version November 28, 2019, 7:41 pm UTC
*/

class TopTeamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'logo',
        'description'
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
        return TopTeam::class;
    }
}
