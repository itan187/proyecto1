<?php

Route::get("/login", function(){ 
    // return view('login'); 
    return("jjj");
});

Route::get('/upload','UploadController@index');

Route::post('/loginme','LoginController@login');

Route::get('/vistaGeneral', 'VistaController@vista' )->name("vista");

Route::get('/inicio','InicioController@inicio')->name("inicio");

//Rutas Profile User

Route::get('user/profile','ProfileController@profile')->name('profile');
Route::post('user/updateprofile', 'ProfileController@updateProfile');

//Rutas Vista 
Route::get('user/high_user','High_UserController@users');

Route::get('projects/projects','ProyectsController@projects');