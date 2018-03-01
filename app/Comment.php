<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /**
     * @return BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * @return BelongsTo
     */
    public function user() // $comment->user->name
    {
        return $this->belongsTo(User::class);
    }


}
