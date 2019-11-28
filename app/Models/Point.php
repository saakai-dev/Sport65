<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Point
 * @package App\Models
 * @version November 28, 2019, 7:35 pm UTC
 *
 * @property string team
 * @property string logo
 * @property string point
 * @property string win
 * @property string lose
 */
class Point extends Model
{
    use SoftDeletes;

    public $table = 'points';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'team',
        'logo',
        'point',
        'win',
        'lose'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'team' => 'string',
        'logo' => 'string',
        'point' => 'string',
        'win' => 'string',
        'lose' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'team' => 'required',
        'logo' => 'required',
        'point' => 'required',
        'win' => 'required',
        'lose' => 'required'
    ];

    
}
