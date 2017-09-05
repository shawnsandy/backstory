<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */


Route::resource('stories', "\ShawnSandy\Backstory\App\StoryController",
    ['only' => ["store", "update", "destroy"]]);
