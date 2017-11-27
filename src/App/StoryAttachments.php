<?php

namespace ShawnSandy\Backstory\App;


class StoryAttachments
{
     public function stories()
    {
        return $this->belongsToMany(Story::class);
    }

}
