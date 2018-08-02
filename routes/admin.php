<?php

// Backpack\CRUD: Define the resources for the entities you want to CRUD.
CRUD::resource('blog_translation', 'Blog_translationCrudController');
Route::post('blog_translation/{user}','Blog_translationCrudController@destroy');
CRUD::resource('blog_translation', 'Blog_translationCrudController');
