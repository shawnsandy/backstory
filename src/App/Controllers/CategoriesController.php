<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/5/17
 * Time: 2:55 PM
 */

namespace ShawnSandy\Backstory\App\Controllers;
use ShawnSandy\Backstory\App\Request\CategoryRequests;

use Illuminate\Routing\Controller;

class CategoriesController extends Controller
{

    public function store(CategoryRequests $request) {

        if($request->save())
        return back()->with('success', "Your category has been added");

        return back()->with("error", "Sorry unable to create category");

    }

    public function update() {



    }

    public function destroy() {

    }

}
