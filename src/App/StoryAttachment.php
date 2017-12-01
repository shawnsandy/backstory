<?php

namespace ShawnSandy\Backstory\App;


use Illuminate\Database\Eloquent\Model;

class StoryAttachment extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function stories()
    {
        return $this->belongsToMany(Story::class);
    }

}
