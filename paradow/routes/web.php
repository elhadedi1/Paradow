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
// Route::group(['namespace' => 'Auth'], function () {
//     Route::get('/reset', 'ResetPasswordController@getPasswordResetView');
//   });
  



Route::group(['prefix'=>LaravelLocalization::setlocale()],function()
{

Route::get('/', function () {
    
    return view('site/index');
});

Route::get('/error', function () {
    
    return view('site/error');
});
Route::group(['prefix'=>'admin','middleware'=>'loginAdmin'],function()
{
    Route::get('/','adminController@index');
    Route::get('/category/{id}/approve', 'categoryController@approve');
    Route::get('/category/{id}/hidePost', 'categoryController@hidePost');
    Route::resource('users','userController');
    Route::resource('/category','categoryController');
    Route::any('/category/{id}/editOffer','offerController@editOffer');
    // Route::any('/category/{id}/getId','categoryController@getId');
    Route::resource('/download','downloadController');
    Route::resource('/offer','offerController');
    Route::resource('/feature','featureController');
    Route::resource('/aboutTitle','aboutTitleController');
    Route::resource('about','aboutController');
    Route::resource('product','productController');
    Route::resource('abouts','about_pageController');
});

//Following Routes
    Route::resource('user', 'UsersController', ['only' => ['main', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('user.followings');
        Route::get('followers', 'UsersController@followers')->name('user.followers');
    });

Route::group(['middleware'=>'guest'],function()
{
    Route::get('/login','loginController@create');
    Route::post('/login','loginController@store');
  //  Route::get('/reset', 'ResetPasswordController@getPasswordResetView');
    Route::get('/reset', 'siteController@resetPassword');
   // Route::get('/forget', 'siteController@showLinkRequestForm');
});
Route::get('/logout','loginController@destroy');



//route site


Route::group(['middleware'=>'revalidate'],function()
{
    
    Route::resource('/','siteController');
    Route::get('/signup','siteController@signup');
    Route::post('/signup','siteController@create');
    Route::post('/signup','siteController@store');
    Route::get('/cart','siteController@cart');
    Route::get('/cart/{id}','siteController@AddToCart');
    Route::get('/category','siteController@category');
    Route::get('/category/{id}','siteController@showcategory');
    Route::any('/carts/{id}','siteController@delFromCart');
    Route::get('/about','siteController@about');
    Route::any('/search','siteController@search');
    Route::post('/conatct','siteController@storeContact');
    Route::get('/download','siteController@download');
    Route::get('/{id}/offer','siteController@offer');
    Route::get('/buy','siteController@buy');
   // Route::get('/order','siteController@order');

   Route::get('/profilee','siteController@profile1');
    /*photos*/
    Route::post('/profile','photoController@store')->name('photos.add');
    Route::get('/profile','photoController@index'); 
    // Route::post('/photos/{id}', "photoController@update")->name('photos.update');
    Route::delete('/photos/delete/{id}', 'photoController@delete')->name('photos.delete');
    /*User Account*/
    Route::get('/userAccount','siteController@userAccount');
    /*profileSetting*/
    Route::get('/profileSetting','siteController@profileSetting');
    Route::get('/userAccount', "profileSettingController@index");
    Route::put('/users/{id}', "profileSettingController@update")->name('users.update');
    Route::get('/users/{id}', ['as' => 'userAccount', 'uses' => 'profileSettingController@edit']);
    /*Comment*/
    Route::post('/category', 'CommentController@store')->name('comment.add');
    Route::get('/comment/delete/{id}','CommentController@delete')->name('comments.delete');
    Route::get('/comment/{id}/edit','CommentController@edit')->name('comments.edit');
    Route::post('/comment/{id}/edit','CommentController@update')->name('comments.update');
    /*View my Posts*/
    Route::get('/viewPosts','siteController@viewposts');
    /*Become A seller*/
    Route::get('/becomeSeller','siteController@becomeSeller');
    /* Seller add Photo*/
    Route::get('/sellerCreate','sellerController@index');
    Route::delete('/category/delete/{id}', 'sellerController@delete')->name('categories.delete');
    Route::post('/category/{id}', "sellerController@update")->name('categories.update');
    Route::post('/sellerCreate', "sellerController@store")->name('categories.add');
    /* add your Story*/
    Route::resource('/storyCreate','storiesController')->names(['store' => 'story.add']);
    /*make order*/
    // Change from post to get && in form (site.order)
    Route::post('/order','orderController@store')->name('order.add');
    Route::get('/order','orderController@index')->name('order');
    Route::delete('/order/delete/{id}', 'orderController@destroy')->name('orders.delete');
  
  
   
    Route::get('/notifications/{id}','siteController@read');
    //Route::get('/mesgs/{id}','siteController@readMsg');



    Route::group(['middleware'=>'guest'],function()
    {
    Route::get('/signin','siteController@login');
    Route::post('/signin','siteController@signin');
    });
    Route::get('/logoutt','siteController@destroy');

    Route::group(['middleware'=>'site'],function()
    {
    Route::get('/categor/{title}','siteController@fav');
    Route::get('/categorys/{id}','siteController@delfav');

    });

});


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
