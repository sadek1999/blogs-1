<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class upvote extends Model
{
    protected $fillable=['user_id','feature_id','upvote'];
    public function feature():BelongsTo
    {

    return $this->belongsTo(Feature::class) ;
    }
}
