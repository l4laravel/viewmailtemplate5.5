<?php

use App\Mail\TestingMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function (){

//   return new App\Mail\TestingMail();

// send mail without paramter working mail 
 Mail::to('rohanvfx15@gmail.com')->send(new TestingMail());
});