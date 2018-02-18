<?php

use App\Mail\ContactMessageCreated;

Route::name('root_path')->get('/','PagesController@home');

Route::get('/test-email',function(){
	return new ContactMessageCreated('Coulibaly Zana', 'info@global-aeit.com', 'Merci pour Laracarte');
});


Route::get('/about','PagesController@about')->name('about_path');

Route::get('/contact',[
   'as' => 'contact_path',
   'uses' => 'ContactsController@create'
]);

Route::post('/contact',[
   'as' => 'contact_path',
   'uses' => 'ContactsController@store'
]);



