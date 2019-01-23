<?php

Route::get("/login", function(){ return view('login'); });

Route::get('/upload','UploadController@index');

Route::post('/loginme','LoginController@login');

Route::get('/vistaGeneral', 'VistaController@vista' )->name("vista"); // con la funcion name tu puedes ponerle nombre a tus urls y usarias 
// vistaGeneral (esto es igual a, lo invocas con url  ) => vista (lo invocas con route)
// la funcion route como  lo tenias originalmente
// Mira aqui pon atencion ... Eso que subraye  es tu ruta 
// y esa ruta manda a llamar la funcion vista de tu contolador VistaController.. ok sigamos

Route::get('/inicio','InicioController@inicio')->name("inicio");

//Rutas Profile User

Route::get('user/profile','ProfileController@profile')->name('profile');
Route::post('user/updateprofile', 'ProfileController@updateProfile');

//Rutas Vista 
Route::get('user/high_user','High_UserController@users');

Route::get('projects/projects','ProyectsController@projects');