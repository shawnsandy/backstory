<?php

namespace ShawnSandy\Backstory\Traits;

use ShawnSandy\Backstory\App\Story;


trait Storify
{

    public function stories()
    {
        return $this->hasMany(Story::class);
    }

    public function getStoryTitleAttribute()
    {
        return $this->stories->title;
    }

    public function getStoryContentAttribute()
    {
        return $this->stories->content;
    }

    public function getStoryCoverAttribute()
    {
        return $this->stories->cover_photo;
    }


    public function getStoryTypeAttribute()
    {
        return $this->stories->type;
    }


    public function getStoryStatusAttribute()
    {
        return $this->stories->status;
    }


    public function getStoryIntroductionAttribute()
    {
        return $this->stories->introduction;
    }

}
