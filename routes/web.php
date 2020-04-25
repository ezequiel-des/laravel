<?php





Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::get('/portfolio','projectController@index')->name('projects.index'); 
Route::get('/portfolio/insertar','projectController@create')->name('projects.create');
Route::get('/portfolio/{project}/editar','projectController@edit')->name('projects.edit'); //EDITAR
Route::patch('/portfolio/{project}','projectController@update')->name('projects.update'); //ACTUALIZAR LA INFORMACION DEL LUBRO

Route::delete('/portfolio/{project}','projectController@destroy')->name('projects.destroy'); //ELIMINAR LA INFORMACION DEL LUBRO


Route::post('/portfolio','projectController@store')->name('projects.store'); 

Route::get('/portfolio/{projecto}','projectController@show')->name('projects.show');

Route::view('/contact','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');
Auth::routes();


