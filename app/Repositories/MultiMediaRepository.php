<?php

namespace App\Repositories;

use App\Models\MultiMedia;
use App\Repositories\BaseRepository;

/**
 * Class MultiMediaRepository
 * @package App\Repositories
 * @version November 28, 2019, 7:38 pm UTC
*/

class MultiMediaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'video'
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
        return MultiMedia::class;
    }
}
