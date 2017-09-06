<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */



 Route::group(['prefix' => 'story'], function () {
     //


    Route::resource('/', "\ShawnSandy\Backstory\App\Controllers\StoryController",
    ['only' => ["store", "update", "destroy"]]);

    Route::resource('category', "\ShawnSandy\Backstory\App\Controllers\CategoriesController",
    ['only' => ["store", "update", "destroy"]]);

    Route::resource('attachments', "\ShawnSandy\Backstory\App\Controllers\AttachmentsController",
    ['only' => ["store", "update", "destroy"]]);


    Route::resource('options', "\ShawnSandy\Backstory\App\Controllers\OptionsController",
    ['only' => ["store", "update", "destroy"]]);

 });
