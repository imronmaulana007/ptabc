<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Company
 * @package App\Models
 * @version November 8, 2022, 2:27 am UTC
 *
 * @property string $name
 * @property string $description
 * @property integer $status
 */
class Company extends Model
{
    use SoftDeletes;


    public $table = 'ms_comapny';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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

    
}
