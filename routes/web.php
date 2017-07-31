<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','PlatformController@index')->name('home');


Route::get('/thankwall','ThankPostController@showYouThanked');
Route::get('/emaillink/uid/{id}/postid/{postid}','ThankPostController@emailLink');
Route::get('/registered/uid/{id}/postid/{postid}','ThankPostController@registeredLink');

Route::post('/create-user','CustomRegistrationController@RegControlWithQueryParam');

Route::post('/comments/{postid}/store','PostCommentsController@store');

Route::post('/postthank','ThankPostController@ThankPost');

