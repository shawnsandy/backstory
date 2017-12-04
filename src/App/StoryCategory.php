<?php

namespace ShawnSandy\Backstory\App;

use ShawnSandy\Backstory\App ;
use ShawnSandy\Backstory\App\Story;
use Illuminate\Database\Eloquent\Model;

class StoryCategory extends Model
{

    protected $fillable = [
        "name",
        "description"
    ];

    public function stories()
    {

        return $this->belongsToMany(Story::class);

    }

}
