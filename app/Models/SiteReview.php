<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SiteReview
 * @package App\Models
 * @version November 28, 2019, 11:10 am UTC
 *
 * @property string title
 * @property string answer
 */
class SiteReview extends Model
{
    use SoftDeletes;

    public $table = 'site_reviews';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'answer' => 'required'
    ];

    
}
