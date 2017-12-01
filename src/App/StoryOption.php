<?php
namespace ShawnSandy\Backstory\App;


use Illuminate\Database\Eloquent\Model;



class StoryOption extends  Model
{

	public function story() {
		return $this->belongsTo(Story::class);
	}

}
