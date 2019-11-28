<?php

namespace App\Models;

use App\User;
use Auth;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Favorite;


/**
 * Class Blog
 * @package App\Models
 * @version November 28, 2019, 10:52 am UTC
 *
 * @property User user
 * @property string title
 * @property string contents
 * @property string image
 * @property integer user_id
 */
class Blog extends Model
{
    use SoftDeletes;

    public $table = 'blogs';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'contents',
        'image',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
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
        'title' => 'required',
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

    public function favorited()
    {
        return (bool)Favorite::where('user_id', Auth::user()->id)
            ->where('blog_id', $this->id)
            ->first();
    }
}
