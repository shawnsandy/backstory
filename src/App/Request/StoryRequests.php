<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/5/17
 * Time: 3:28 PM
 */

namespace ShawnSandy\Backstory\App\Request;


use Illuminate\Foundation\Http\FormRequest;

class StoryRequests extends FormRequest
{

    public function authorize() {
        return true;
    }

    public function rules() {
        return  [ ];
    }

}
