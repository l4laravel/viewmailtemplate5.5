<?php

use App\Jobs\SendEmailJob;
use App\Mail\TestingMail;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function (){

    SendEmailJob::dispatch()
        ->delay(Carbon::now()->addSeconds(20));
    return 'mail sent';

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
