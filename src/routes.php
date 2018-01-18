<?php

/**
* Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

Route::resource('backstory', "\ShawnSandy\Backstory\App\Controllers\BackStoryController");

 Route::group(['prefix' => 'story', ], function () {



     Route::group(['middleware' => ['auth']], function () {


         Route::resource(
            '/create',
            "\ShawnSandy\Backstory\App\Controllers\StoryController",
        ['only' => ['store', 'update', 'destroy']]
        );

         Route::resource(
            '/options',
            "\ShawnSandy\Backstory\App\Controllers\StoryOptionsController",
        ['only' => ['store', 'update', 'destroy']]
        );

         Route::resource(
            '/category',
            "\ShawnSandy\Backstory\App\Controllers\CategoriesController",
        ['only' => ['store', 'update', 'destroy']]
        );

         Route::resource(
            '/config',
            "\ShawnSandy\Backstory\App\Controllers\OptionsController",
        ['only' => ['store', 'update', 'destroy']]
        );
     });

 });
