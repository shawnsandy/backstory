<?php
namespace ShawnSandy\BackStory\App;

use ShawnSandy\Backstory\App\Story;
use Illuminate\Database\Eloquent\Model;



class StoryOption extends  Model
{

	public function story() {
		return $this->belongsTo(Story::class);
	}

}
