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

Route::get('/recoverPassword',function(){
    return view('recoverPassword');
});
Route::post('/recoverPassword','teamController@recoverPassword');

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


Route::get('/jobs','indexController@jobs');
Route::post('/saveCV', "indexController@saveCV");
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
Route::prefix('administrator')->middleware(['checkAdmin'])->group(function(){
        Route::get('dashboard',function(){
            return view('admin.dashboard');
        });
        // jobs
        Route::get('/job/list','adminController@jobs');
        Route::get('/job/add','adminController@job_add');
        Route::post('/job/add','adminController@job_create');
        Route::get('/job/edit/{id}','adminController@job_edit');
        Route::get('/job/remove/{id}','adminController@job_delete');
        Route::post('/job/update','adminController@job_update');

        // companies

        Route::get('/company/list','adminController@companies');
        Route::get('/company/add','adminController@company_add');
        Route::post('/company/add','adminController@company_create');
        Route::get('/company/edit/{id}','adminController@company_edit');
        Route::get('/company/remove/{id}','adminController@company_delete');
        Route::post('/company/update','adminController@company_update');

        Route::get('/sponsor/list','adminController@sponsors');
});
Route::get('/administrator/login',function(){
    return view('admin.login');
});
Route::post('/administrator/login','adminController@login');
