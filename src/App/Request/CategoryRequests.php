<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/5/17
 * Time: 3:33 PM
 */

namespace ShawnSandy\Backstory\App\Request;


use Illuminate\Foundation\Http\FormRequest;
use ShawnSandy\Backstory\App\StoryCategory;

class CategoryRequests extends FormRequest
{

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => "required|max:100",
            'description' => "max:200",
        ];
    }

    public function save()
    {

        $data = $this->input();

        if($category = StoryCategory::create($data))
        return $category;

        return false;

    }

    public function delete($id)
    {

        if(StoryCategory::destroy($id))
        return true;

        return false;

    }

}
