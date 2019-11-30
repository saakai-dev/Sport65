<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteReview extends Model
{
    protected $fillable = ['site_reviews_id', 'vote'];
    protected $table = 'vote_reviews';

    public function review()
    {
//        return $this->belongsTo(SiteReview::class, 'vote_reviews', 'vote_review_id', 'id');
        return $this->belongsTo(SiteReview::class);
    }
}
