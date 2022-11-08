<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Employees
 * @package App\Models
 * @version November 5, 2022, 3:45 pm UTC
 *
 * @property integer $company_id
 * @property integer $department_id
 * @property integer $nik
 * @property string $fullname
 * @property string $joined
 * @property string $resigned
 * @property integer $status
 */
class Employees extends Model
{
    use SoftDeletes;


    public $table = 'ms_employee';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'company_id',
        'department_id',
        'nik',
        'fullname',
        'joined',
        'resigned',
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
        'department_id' => 'integer',
        'nik' => 'integer',
        'fullname' => 'string',
        'joined' => 'date',
        'resigned' => 'date',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function companies()
    {
        return $this->hasMany(\App\Models\Company::class, 'id', 'company_id');
    }

    public function departments()
    {
        return $this->hasMany(\App\Models\Department::class, 'id', 'department_id');
    }
}
