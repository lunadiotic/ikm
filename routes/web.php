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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/check', 'IndexController@getCheck')->name('check');
Route::post('/check', 'IndexController@postCheck');
Route::get('/quiz', 'IndexController@getQuiz')->name('quiz');
Route::post('/quiz', 'IndexController@postQuiz');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('admin');
    Route::resource('respondent', 'RespondentController');
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::resource('gender', 'GenderController');
        Route::resource('education', 'EducationController');
        Route::resource('job', 'JobController');
        Route::resource('info', 'InfoController');
        Route::resource('respondents/form', 'RespondentsFormController', ['as' => 'respondents']);
    });

    Route::group(['prefix' => 'report'], function () {
        Route::get('respondent/check', 'ReportController@checkRespondent')->name('report.respondent.check');
        Route::post('respondent/check', 'ReportController@dateRespondent');
        Route::get('respondent/{start}/{end}/{triwulan}/{tahun}', 'ReportController@getRespondent')->name('report.respondent');
        Route::get('/check', 'ReportController@getCheck')->name('report.check');
        Route::post('/check', 'ReportController@postCheck');
        Route::get('/report/{tahun}', 'ReportController@report')->name('report');
    });
});


Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
    Route::get('gender', 'GenderController@dataTable')->name('gender');
    Route::get('education', 'EducationController@dataTable')->name('education');
    Route::get('job', 'JobController@dataTable')->name('job');
    Route::get('info', 'InfoController@dataTable')->name('info');
    Route::get('respondent', 'RespondentController@dataTable')->name('respondent');
    Route::get('respondents/form', 'RespondentsFormController@dataTable')->name('respondents.form');
});