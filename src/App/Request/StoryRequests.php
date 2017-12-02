<?php

/**
* Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/5/17
 * Time: 3:28 PM
 */

namespace ShawnSandy\Backstory\App\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use ShawnSandy\Backstory\App\Story;

class StoryRequests extends FormRequest
{

	public function authorize() {
		return true;
	}

	public function rules() {
		return  [

		'title' => 'required|max:199',
		            'introduction' => 'max:250',
		            'featured' => 'numeric',
		            'type' => 'string',
		            'status' => 'string',
		            'content' => 'string',
		            'cover_photo' => 'image',

		];
	}

	public function save() {

        if($story = Auth::user()->stories()->create($this->data()))
		return $story;

		return false;

    }


    public function update($id)
    {
        if($story = Story::updateOrCreate(['id' => $id], $this->data()))
        return $story;

        return false;
    }

    protected function data()
    {
        $data = $this->input();

		$data['content_plain'] = "some plain old content";

        if($this->upload())
        $data['cover_photo'] = $this->upload;

        return $data;

    }

	public function upload()
	{
		if($this->hasFile("cover_photo") && $this->file("cover_photo")->is_valid())
		            return $this->file('cover_photo')->store('img');

		return null;

	}

}
