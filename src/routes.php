<?php

/**
* Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

 use ShawnSandy\Backstory\App\Story;

Route::view("stories", "backstory::index");

Route::get("story/{id}", function($id){

	$story = Story::with(['author', 'categories'])->where("id", $id)->first();
	return view("backstory::story", compact("story"));

}
);

Route::group(["middleware" => ["auth"]], function () {

    Route::view("create-story", "backstory::create");

	Route::get("update-story/{id}", function($id) {

		$model = Story::with(['author', 'categories'])->where("id", $id)->first();
		return  view("backstory::update", compact('model'));

	});

    Route::group(['prefix' => 'story', ], function(){


        Route::resource('/create', "\ShawnSandy\Backstory\App\Controllers\StoryController",
	    ['only' => ["store", "update", "destroy"]]);


        Route::resource('/meta', "\ShawnSandy\Backstory\App\Controllers\StoryMetaController",
	    ['only' => ["store", "update", "destroy"]]);


        Route::resource('/options', "\ShawnSandy\Backstory\App\Controllers\StoryOptionsController",
	    ['only' => ["store", "update", "destroy"]]);

        Route::resource('/category', "\ShawnSandy\Backstory\App\Controllers\CategoriesController",
	    ['only' => ["store", "update", "destroy"]]);

        Route::resource('/options', "\ShawnSandy\Backstory\App\Controllers\OptionsController",
	    ['only' => ["store", "update", "destroy"]]);
    });

});
