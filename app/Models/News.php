<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class New
 * @package App\Models
 * @version November 28, 2019, 10:55 am UTC
 *
 * @property \App\User user
 * @property string name
 * @property string contents
 * @property string image
 * @property integer user_id
 */
class News extends Model
{
    use SoftDeletes;

    public $table = 'news';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'contents',
        'image',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'contents' => 'string',
        'image' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'contents' => 'required',
        'image' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
