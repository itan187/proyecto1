<?php

Route::get("/login", function(){ return view('login'); });

Route::get('/upload','UploadController@index');

Route::post('/loginme','LoginController@login');

