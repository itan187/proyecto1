<?php
// Archivo de rutas 
/*Route::get('/', function() {
    return view('users'); 
});*/

Route::get("/login", function(){
   return view('login');
});

//Route::group(['middleware' => ['web']], function () {
    Route::get('/upload','UploadController@index');
    Route::post('/upload/add', 'UploadController@uploadFiles');
//});
//login
Route::post('/loginme','LoginController@login');
//Route::post('/loginme','LoginController@login');

