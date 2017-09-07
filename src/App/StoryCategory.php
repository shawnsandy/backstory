<?php

namespace ShawnSandy\Backstory\App;

use ShawnSandy\Backstory\App ;
use ShawnSandy\Backstory\App\Story;
use Illuminate\Database\Eloquent\Model;

class StoryCategory extends Model
{

    public function stories()
    {

        return $this->belongsToMany(Story::class);

    }

}
