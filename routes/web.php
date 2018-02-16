<?php

Route::name('root_path')->get('/','PagesController@home');

Route::get('/about','PagesController@about')->name('about_path');

Route::get('/contact',[
   'as' => 'contact_path',
   'uses' => 'ContactsController@create'
]);



