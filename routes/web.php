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
Route::get('/thankwall/id/{id}','ThankPostController@showProfileThankWall');
Route::get('/emaillink/uid/{id}/postid/{postid}','ThankPostController@emailLink');
Route::get('/registered/uid/{id}/postid/{postid}','ThankPostController@registeredLink');
Route::get('/showposts/postid/{postid}','ThankPostController@ShowPostId');
Route::get('/latestposts','ThankPostController@showTopFivePosts');
Route::get('/latestposts/id/{id}','ThankPostController@showProfileTopFivePosts');
Route::get('/likepost/{postid}','ThankPostController@likedPost');
Route::get('/app-showposts','PlatformController@posts');

Route::post('/create-user','CustomRegistrationController@RegControlWithQueryParam');

Route::post('/comments/{postid}/store','PostCommentsController@store');

Route::post('/postthank','ThankPostController@ThankPost');

Route::get('/search','SearchController@searchName');
Route::get('/profile/id/{id}','PlatformController@viewProfile');

Route::get('/profile-edit','PlatformController@editProfile');
Route::post('/update','PlatformController@update');

Route::post('/profile-insert','PlatformController@create');

Route::get('/thank-someone','PlatformController@thankSomeone');

//Purchases

Route::post('/purchases','PurchasesController@store');
Route::get('/stripebuy','PlatformController@returnStripe');
