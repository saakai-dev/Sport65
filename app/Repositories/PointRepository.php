<?php

namespace App\Repositories;

use App\Models\Point;
use App\Repositories\BaseRepository;

/**
 * Class PointRepository
 * @package App\Repositories
 * @version November 28, 2019, 7:35 pm UTC
*/

class PointRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'team',
        'logo',
        'point',
        'win',
        'lose'
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
        return Point::class;
    }
}
