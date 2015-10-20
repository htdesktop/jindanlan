<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('productions/index');
});

Route::resource('platform',"PlatformController",['only' => ['index', 'show']]);

Route::resource('production',"ProductionController",['only' => ['index', 'show']]);
