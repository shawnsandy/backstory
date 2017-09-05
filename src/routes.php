<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */


Route::resource('stories', "\ShawnSandy\Backstory\App\StoryController",
    ['only' => ["store", "update", "destroy"]]);

Route::resource('story-category', "\ShawnSandy\Backstory\App\CategoriesController",
    ['only' => ["store", "update", "destroy"]]);

Route::resource('story-attachments', "\ShawnSandy\Backstory\App\AttachmentsController",
    ['only' => ["store", "update", "destroy"]]);


Route::resource('story-options', "\ShawnSandy\Backstory\App\OptionsController",
    ['only' => ["store", "update", "destroy"]]);


