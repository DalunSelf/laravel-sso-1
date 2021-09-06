<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware('api')->prefix('api/sso')->group(function () {
    Route::post('login', 'Iffutsius\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'Iffutsius\LaravelSSO\Controllers\ServerController@logout');
    Route::get('attach', 'Iffutsius\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'Iffutsius\LaravelSSO\Controllers\ServerController@userInfo');
});
