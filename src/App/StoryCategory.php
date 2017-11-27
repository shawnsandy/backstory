<?php

namespace ShawnSandy\Backstory\App;

class StoryCategory
{

     public function stories()
    {
        return $this->belongsToMany(Story::class);
    }

}
