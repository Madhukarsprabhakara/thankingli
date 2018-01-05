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

// Route::get('/', function () {
//     return redirect('/welcome');
// });
Route::get('/','PlatformController@homeDesign');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','PlatformController@index')->name('home');


Route::get('/thankwall','ThankPostController@showYouThanked');
Route::get('/thankwall/id/{id}','ThankPostController@showProfileThankWall');
Route::get('/emaillink/uid/{id}/postid/{postid}','ThankPostController@emailLink');
Route::get('/registered/uid/{id}/postid/{postid}','ThankPostController@registeredLink');
Route::get('/showposts/postid/{postid}','ThankPostController@ShowPostId');
//Route::get('/latestposts','ThankPostController@showTopFivePosts');
Route::get('/latestposts',function() {
	return redirect('/thankfeed');
});
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
Route::get('/thank/{id}','PlatformController@thankId');

//Purchases

Route::post('/purchases','PurchasesController@store');

//Redesign

Route::get('/welcome','PlatformController@homeDesign');
Route::get('/thankfeed','ThankPostController@showTopFivePosts');

Route::get('/stripebuy','PlatformController@returnStripe');

Route::get('/logincustom-1-0','CustomSessionsController@create');
Route::get('/register-1-0','CustomRegistrationController@create');
Route::get('/thank-someone-1-0','PlatformController@thankSomeoneNew');
Route::get('/profile-1-0/{id}','PlatformController@viewProfileNew');
Route::get('/profile-1-0/id/{id}','PlatformController@viewPt');
Route::get('/thankwall-1-0/id/{id}','ThankPostController@viewTp');
Route::get('/thank-1-0/{id}','PlatformController@thankId');
Route::get('/first-hundred','PlatformController@firstHund');
Route::get('/visionaries','PlatformController@visionaries');

//private thanks routes

Route::get('/private','PlatformController@showPrivate');
Route::get('/from/{id}','PlatformController@showPrivateFromPost');
Route::get('/to/{id}','PlatformController@showPrivateToPost');

//Business routes

Route::get('/business','BusinessController@index');
Route::get('/orders','BusinessController@orders');
Route::get('/searchcode','BusinessController@searchCodes');
Route::get('/business/markused/{code}','BusinessController@markUsed');
//testing

Route::get('/headers','ThankPostController@headers');
