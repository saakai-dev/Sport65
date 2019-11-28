<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TopTeam
 * @package App\Models
 * @version November 28, 2019, 7:41 pm UTC
 *
 * @property string name
 * @property string logo
 * @property string description
 */
class TopTeam extends Model
{
    use SoftDeletes;

    public $table = 'top_teams';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'logo',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'logo' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'logo' => 'required'
    ];

    
}
