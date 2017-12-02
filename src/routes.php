<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */



 Route::group(['prefix' => 'story'], function () {
     //


    Route::resource('/create', "\ShawnSandy\Backstory\App\Controllers\StoryController",
    ['only' => ["store", "update", "destroy"]]);


    Route::resource('/story/meta', "\ShawnSandy\Backstory\App\Controllers\StoryMetaController",
    ['only' => ["store", "update", "destroy"]]);


    Route::resource('/story/options', "\ShawnSandy\Backstory\App\Controllers\StoryOptionsController",
    ['only' => ["store", "update", "destroy"]]);

    Route::resource('category', "\ShawnSandy\Backstory\App\Controllers\CategoriesController",
    ['only' => ["store", "update", "destroy"]]);

    Route::resource('options', "\ShawnSandy\Backstory\App\Controllers\OptionsController",
    ['only' => ["store", "update", "destroy"]]);

 });
