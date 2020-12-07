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


Route::get('/', 'indexController@index');



Route::get('/signupTeam', function () {
    return view('team_registration');
});
Route::get('/resend','teamController@resendPassword');

Route::get('/about', function () {
    return view('singlePages.aboutUs');
});


Route::get('/ChangeMobileNumber','teamController@changeNumber');
Route::post('/ChangeMobileNumber','teamController@edit_number');

Route::get('/VerifyAccount','teamController@verifyAccount');
Route::post('/VerifyAccount','teamController@verifyCode');



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

Route::get('/logout',function(){
    session()->forget('user_id');
    return redirect('/');
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

Route::get('/blog','indexController@blog');
Route::get('/blog/{id}/{permalink}','indexController@post_detail');
Route::get('/how-face-recognition-works',function(){
    return view('sections.blog1');
});

Route::get('/artificial-intelligence-progress',function(){
    return view('sections.blog2');
});


Route::get('/jobs','indexController@jobs');
Route::get('/faq','indexController@faq');
Route::post('/saveCV', "indexController@saveCV");


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
        
        // resume
        Route::get('/resume/list','adminController@resumes');
       
        // sponsors
        Route::get('/sponsor/list','adminController@sponsors');
        Route::get('/sponsor/add','adminController@sponsor_add');
        Route::post('/sponsor/add','adminController@sponsor_create');
        Route::get('/sponsor/edit/{id}','adminController@sponsor_edit');
        Route::get('/sponsor/remove/{id}','adminController@sponsor_delete');
        Route::post('/sponsor/update','adminController@sponsor_update');

        // Team
        Route::get('/team/list','adminController@teams');
        Route::get('/team/detail/{id}','adminController@team_detail');
        Route::get('/team/remove/{id}','adminController@team_delete');
        Route::get('/team/export/{type}','adminController@team_exports');
        // Post
        Route::get('/post/list','adminController@posts');
        Route::get('/post/add','adminController@post_add');
        Route::post('/post/add','adminController@post_create');
        Route::get('/post/edit/{id}','adminController@post_edit');
        Route::get('/post/remove/{id}','adminController@post_delete');
        Route::post('/post/update','adminController@post_update');


        // faq
        Route::get('/faq/list','adminController@faqs');
        Route::get('/faq/add','adminController@faq_add');
        Route::post('/faq/add','adminController@faq_create');
        Route::get('/faq/edit/{id}','adminController@faq_edit');
        Route::get('/faq/remove/{id}','adminController@faq_delete');
        Route::post('/faq/update','adminController@faq_update');


        //newsletters
        Route::get('/newsletter/list','adminController@newsletter');
        Route::get('/newsletter/export/{type}','adminController@newsletter_exports');
});
Route::get('/administrator/login',function(){
    return view('admin.login');
});
Route::post('/administrator/login','adminController@login');

Route::group(['middleware' => ['isVerified']], function () {
    //
    Route::get('/dashboard','teamController@Dashboard');
    Route::get('/TeamInfo', "teamController@index");
    Route::post('/TeamInfo', "teamController@update");
    Route::get('/AddMember', "memberController@create");
    Route::post('/AddMember', "memberController@store");
    Route::get('/changePassword','teamController@changePassword');
    Route::post('/changePassword','teamController@doChangePassword');
    Route::get('/removeMember/{id}', "memberController@destroy");
    Route::get('/get-files','indexController@get_files');
    Route::get('/get-files/get-docker-file','indexController@get_docker_file');
    Route::get('/get-files/get-dataset-file','indexController@get_dataset_file');
    
    //Route::domain('upload.facecup.ir')->group(function () {
        Route::get('/fileupload', 'FileUploadController@fileUpload');
        Route::post('/fileupload', 'FileUploadController@fileStore');
        Route::post('/chunkedupload','DependencyUploadController@uploadFile');
    //});
});