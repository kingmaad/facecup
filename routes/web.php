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
use Illuminate\Support\Facades\Route;


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

Route::get('/removeMember/{id}', "memberController@destroy");

Route::get('/signupTeam', function () {
    return view('team_registration');
});

Route::get('/login', function () {
    if(session('user_id'))
    return redirect()->action('teamController@index');
    else
        return view('teamLogin');
});

Route::post('/login','teamController@login');
Route::get('/changePassword','teamController@changePassword');
Route::post('/changePassword','teamController@doChangePassword');
Route::get('/logout',function(){
    session()->forget('user_id');
    return view('index');
});

Route::post('/reg','teamController@store');
Route::post('/otp','teamController@checkOTP');
Route::post('/requestOTP','teamController@requestOTP');

Route::post('/newsletter','indexController@newsLetter');
Route::post('/sendMessage','indexController@sendMessage');

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

Route::get('/generalRules',function(){
    return view('singlePages.generalRules');
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


Route::get('/jobs',function(){
    return view('sections.jobs');
});

Route::get('/dashboard','teamController@Dashboard');

Route::get('/awards',function(){
    return view('sections.awards');
});

Route::get('/sponsor',function(){
    return view('sections.sponsor');
});

Route::get('/referee',function(){
    return view('sections.referee');
});