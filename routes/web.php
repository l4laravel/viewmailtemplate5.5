<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function (){

   return new App\Mail\TestingMail();
});