<?php

namespace App\Repositories;

use App\Models\New;
use App\Repositories\BaseRepository;

/**
 * Class NewRepository
 * @package App\Repositories
 * @version November 28, 2019, 10:55 am UTC
*/

class NewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'contents',
        'image'
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
        return New::class;
    }
}
