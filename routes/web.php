<?php



Route::get('/',[
    'uses' => 'frontEndController@home',
    'as'  => '/'
]);

Route::get('/login-register',[
    'uses' => 'frontEndController@SignIn',
    'as'  => 'sign-in'
]);

Route::post('user/registration',[
    'uses' => 'loginController@userSign',
    'as'  => 'user-sign-up'
]);

Route::get('resume-user/builder',[
    'uses' => 'loginController@ResumeForm',
    'as'  => 'resume-builder'
]);

Route::post('resume/builder-form',[
    'uses' => 'ResumeController@cvForm',
    'as'  => 'cv-info'
]);
Route::post('user/signIn',[
    'uses' => 'loginController@userLogin',
    'as'  => 'user-sign-in'
]);

Route::get('user/CompleteCv',[
    'uses' => 'ResumeController@completeCv',
    'as'  => 'complete-cv'
]);

Route::get('user/ResumeDownload',[
    'uses' => 'ResumeController@downloadCvPdf',
    'as'  => 'download-cv'
]);

Route::get('user/ResumePreview',[
    'uses' => 'ResumeController@previewCvPdf',
    'as'  => 'preview-cv'
]);

Route::get('admin/ResumeLoginInfo',[
    'uses' => 'AdminController@ResumeLoginInfo',
    'as'  => 'resume-login-info'
]);

Route::get('admin/AdminLoginInfo',[
    'uses' => 'AdminController@AdminLoginInfo',
    'as'  => 'admin-user'
]);

Route::get('admin/delete/client/{id}',[
    'uses' => 'loginController@DeleteClientLoginInfo',
    'as'  => 'delete-client'
]);

Route::get('admin/delete/admin/{id}',[
    'uses' => 'AdminController@DeleteAdminLoginInfo',
    'as'  => 'delete-admin'
]);

Route::get('admin/show-resume/info',[
    'uses' => 'AdminController@ShowResumeInfo',
    'as'  => 'created-resume-info'
]);

Route::get('admin/delete/info/{id}',[
    'uses' => 'AdminController@DeletedResumeInfo',
    'as'  => 'delete-cvInfo'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
