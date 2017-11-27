<?php

namespace ShawnSandy\Backstory\App;



class StoryOptions
{

    public function story(){
        return $this->belongsTo(Story::class);
    }

}
