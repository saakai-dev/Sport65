<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MultiMedia
 * @package App\Models
 * @version November 28, 2019, 7:38 pm UTC
 *
 * @property string title
 * @property string video
 */
class MultiMedia extends Model
{
    use SoftDeletes;

    public $table = 'multi_media';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'video'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'video' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'video' => 'required|mimes:mp4',

    ];


}
