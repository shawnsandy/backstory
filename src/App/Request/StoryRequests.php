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
        "category" => "sometimes|required"

		];
	}

	public function save() {

        if($story = Auth::user()->stories()->create($this->data()))
		return $story;

		return false;

    }


    public function update($id)
    {
        if($story = Story::updateOrCreate(['id' => $id], $this->data())):

        $this->saveRelationships($story);
        return $story;
        endif;

        return false;
    }

    public function saveRelationships($post)
    {

        if($this->has('category'))
        $post->categories()->sync($this->input('category'));

    }

    protected function data()
    {
        $data = $this->input();

		$data['content_plain'] = "some plain old content";

        if($cover_photo = $this->upload())
        $data['cover_photo'] = $cover_photo;

        return $data;

    }

	public function upload()
	{
		if($this->hasFile("cover_photo") && $this->file("cover_photo")->isValid())
		            return $this->file('cover_photo')->store('img','images');
		return null;

	}

}
