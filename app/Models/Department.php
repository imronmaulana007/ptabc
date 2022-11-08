<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Department
 * @package App\Models
 * @version November 8, 2022, 2:29 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $companies
 * @property integer $company_id
 * @property string $name
 * @property string $description
 * @property integer $status
 */
class Department extends Model
{
    use SoftDeletes;


    public $table = 'ms_department';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'company_id',
        'name',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function companies()
    {
        return $this->hasMany(\App\Models\Company::class, 'id', 'company_id');
    }
}
