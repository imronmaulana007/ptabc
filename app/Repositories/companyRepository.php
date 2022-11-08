<?php

namespace App\Repositories;

use App\Models\company;
use App\Repositories\BaseRepository;

/**
 * Class companyRepository
 * @package App\Repositories
 * @version November 8, 2022, 2:27 am UTC
*/

class companyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'status'
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
        return company::class;
    }
}
