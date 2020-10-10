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
    return view('index');
});
Route::get('/about', function () {
    return view('singlePages.aboutUs');
});
Route::get('/TeamInfo', "teamController@index");
Route::post('/TeamInfo', "teamController@update");
Route::get('/AddMember', "memberController@create");
Route::post('/AddMember', "memberController@store");

Route::get('/signupTeam', function () {
    return view('team_registration');
});
Route::post('/reg','teamController@store');
Route::post('/otp','teamController@checkOTP');

Route::get('/check_en_name','teamController@check_en_name');
Route::get('/check_fa_name','teamController@check_fa_name');
Route::get('/check_mobile','teamController@check_mobile');
Route::get('/aboutUs',function(){
    return view('singlePages.aboutUs');
});
Route::get('/exeRules',function(){
    return view('singlePages.executiveRules');
});
Route::get('/techRules',function(){
    return view('singlePages.technicalRules');
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/how-face-recognition-works',function(){
    return view('sections.blog1');
});

Route::get('/artificial-intelligence-progress',function(){
    return view('sections.blog2');
});