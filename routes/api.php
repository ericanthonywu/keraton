<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login','oauthandroid@login');
Route::post('/register','oauthandroid@register');
Route::post('/logout','oauthandroid@logout');
Route::post('/token','oauthandroid@token');
Route::middleware('apicheck')->group(function (){
    Route::post('/home',"apiandroid@gethome");
    Route::post('/unit',"apiandroid@getunit");
    Route::post('/konfunit',"apiandroid@confirmbanner");
    Route::post('/sale',"apiandroid@sale");
    Route::post('/historysale',"apiandroid@historysale");
    Route::post('/inbox',"apiandroid@inbox");
    Route::post('/profile',"apiandroid@profile");
});