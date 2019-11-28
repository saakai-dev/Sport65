<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Match
 * @package App\Models
 * @version November 28, 2019, 10:58 am UTC
 *
 * @property string title
 * @property string team_one
 * @property string team_two
 * @property string image_one
 * @property string image_two
 */
class Match extends Model
{
    use SoftDeletes;

    public $table = 'matches';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'team_one',
        'team_two',
        'image_one',
        'image_two'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'team_one' => 'string',
        'team_two' => 'string',
        'image_one' => 'string',
        'image_two' => 'string',
        'match_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'team_one' => 'required',
        'team_two' => 'required',
        'image_one' => 'required',
        'image_two' => 'required'
    ];

    
}
