<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BidComment.
 *
 * @mixin \Eloquent
 *
 * @property-read \App\Models\Bid $bid
 * @property-read \App\Models\User $user
 */
class BidComment extends Model
{
    protected $fillable = [];

    public function bid()
    {
        return $this->belongsTo('App\Models\Bid');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}