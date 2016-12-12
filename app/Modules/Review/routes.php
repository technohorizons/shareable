<?php
//Route::get('review', function () {
//    return view('Review::index');
//});


Route::group(['namespace' => 'App\Modules\Review\Controllers'], function () {
    Route::controller('review','ReviewController');
});


