<?php

namespace ShawnSandy\Backstory\App;


use ShawnSandy\Backstory\App\Story;

trait HasStories
{

	public function stories() {
		return $this->hasMany(Story::class);
	}

}
