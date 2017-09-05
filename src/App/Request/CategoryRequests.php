<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/5/17
 * Time: 3:33 PM
 */

namespace ShawnSandy\Backstory\App\Request;


use Illuminate\Foundation\Http\FormRequest;

class CategoryRequests extends FormRequest
{

    public function authorize() {
        return true;
    }

    public function rules() {
        return [

        ];
    }

}
