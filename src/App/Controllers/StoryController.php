<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 9/5/17
 * Time: 2:24 PM
 */

namespace ShawnSandy\Backstory\App\Controllers;


use Illuminate\Routing\Controller;
use ShawnSandy\Backstory\App\Request\StoryRequests;

class StoryController extends Controller
{

    public function store(StoryRequests $request) {

        if($request->save())
        return back()->with('success', 'Your story has been saved');

        return back()->with('error', 'Sorry we could not save your story');;

    }

    public function update(StoryRequests $request, $id) {

      // dd($request->all());

        if($request->update($id))
        return back()->with('success', "Your story has been updated");

        return back()->with('error', "Sorry we could not update your Story");

    }

    public function destroy() {

    }

}
