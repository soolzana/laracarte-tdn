<?php

Route::name('root_path')->get('/','PagesController@home');

Route::get('/about','PagesController@about')->name('about_path');
/*
Route::get('/about',[
   'as' => 'about_path',
   'uses' => 'PagesController@about'
]);
*/


