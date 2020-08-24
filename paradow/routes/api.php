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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/flattersignup','apiController@createUser');
Route::post('/flatterlogin','apiController@loginflatter');



//to select user  http://localhost:8081/api/user/idforuser
Route::get('/user/{id}','apiController@user');



//to select recomd to user  http://localhost:8081/api/user/idforuser
Route::get('/recomUser/{id}','apiController@recomUser');


//to sign up user  http://localhost:8081/api/signup/
Route::get('/signup','apiController@createUser');
// login http://localhost:8081/api/login/
Route::get('/login','apiController@login');

// to Add about http://localhost:8081/api/about
Route::get('/about','apiController@about');

// to select category http://localhost:8081/api/category
Route::get('/category','apiController@category');

// to select specific category details  http://localhost:8081/api/catdetails/idforcategoy
Route::get('/catdetails/{id}','apiController@catdetails');
// to select most liked category details  http://localhost:8081/api/mostliked
Route::get('/mostliked','apiController@mostliked');
// to select most viewed category details  http://localhost:8081/api/mostviewed
Route::get('/mostviewed','apiController@mostviewed');


// to like category   http://localhost:8081/api/catfav/idforcategoy
Route::get('/catfav','apiController@fav');

// to del fav category   http://localhost:8081/api/catDelfav/idforcategoy
Route::get('/catDelfav','apiController@delfav');
