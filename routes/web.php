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
Route::get('/','PlatformController@startIndex');

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
Route::get('/likepost/{postid}','ThankPostController@heartThePost');
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


//Thankingli Reboot v3

//Index page with registration
Route::get('/indexv3',function() {
	return view('indexv3');
});

//Login page

Route::get('/loginv3',function() {
	return view('loginv3');
});

//Forgot Password Page

//Feed
Route::get('/feed','ThankPostController@feed');
Route::get('/homev3','PlatformController@index');
Route::get('/thankwallv3','ThankPostController@showYouThanked');

Route::get('/thanksomeonev3', function(){
	return view('thank_someonev3');
});

Route::get('/searchv3','SearchController@searchIndex');
Route::get('/profilev3/{id}','PlatformController@viewProfilev3');
Route::get('/thank/{id}','PlatformController@thankIdv3');

Route::get('/indexusers','SearchController@indexUsers');
Route::post('/comments/{postid}/storev3','PostCommentsController@storev3');
Route::get('/showpostsv3/postid/{postid}',function() {
	return view('single_post');
});
Route::get('/showpostsv3/postid/{postid}/show','ThankPostController@ShowPostIdv3');


//Thankingli with work orders



Route::get('/loggedin','CustomSessionsController@loggedIn');
Route::get('/getctoken','CustomSessionsController@csrfToken');
Route::post('/loginv4','CustomSessionsController@loginV4');
Route::post('/registerv4','CustomRegistrationController@registerv3');
Route::get('/logoutv3','CustomSessionsController@logoutv3');

//About us page

Route::get('/aboutus',function() {
	return view('about_us');
});

//Routes for categories
Route::get('/populatecategorymenu','CategoriesController@PopulateCategoriesMenu');
Route::post('/getsubcat','CategoriesController@getSubCategoryBasedOnCategory');
Route::post('/getsubcats','CategoriesController@getSubCategoryBasedonCategories');

//Routes for helpposts

Route::post('/storehelpresponse','helpInboxController@storeHelpResponse');
Route::get('/getinboxreplies','helpInboxController@getHelpResponses');
Route::get('/helpsomeone','helpPostController@helpFeed');
Route::post('/shresponsecomment','helpInboxController@storeHelpPostMsgResponse');
//create a help request
Route::post('/storehelppost','helpPostController@storeHelpPost');

//Index help request
Route::get('/indexhelp','AlgoliaIndexController@createHelpObjectToIndex');
//Route::post('/createhelppost','');

//Profile routes
Route::get('/profile-editv3','PlatformController@editProfilev3');
Route::get('/getudata','ProfileController@getUData');
Route::get('/getsdata','ProfileController@getSData');
Route::post('/postudata','ProfileController@storeProfileInfo');
Route::post('/postsdata','ProfileController@storeProfileSkills');
//Image upload
Route::post('/uploadimage','ProfileController@storeImageData');

//Search routes

Route::post('/searchposts','AlgoliaSearchController@searchHelpPosts');
