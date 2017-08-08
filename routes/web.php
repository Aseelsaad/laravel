<?php
//Route::get('/', function () {
//    return view('pages.home');
//});
Route::get('/','PagesController@getHome');
Route::get('/videos/{id?}/{number?}','PagesController@getVideo');
Route::get('/about', function () {
    return view('about', compact('names'));
});
Route::get('/contact', function () {
    return view('pages.contact');
});