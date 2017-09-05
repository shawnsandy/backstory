<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/5/17
 * Time: 3:37 PM
 */

namespace ShawnSandy\Backstory\App\Request;


use Illuminate\Foundation\Http\FormRequest;

class OptionRequests extends FormRequest
{

    public function authorize() {
        return true;
    }

    public function rules() {
        return [

        ];
    }

}
