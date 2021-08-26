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

//home画面から飛べるページ
Route::group(['middleware' => 'auth'],function(){
  Route::get('/Exam','ExamController@index');
  Route::get('/Gamification','GamificationController@index')->name('Gamification');
  Route::get('/Homework','HomeworkController@index')->name('Homework');
  Route::get('/BeforeQuestionnaire','BeforeQuestionnaireController@index')->name('BeforeQuestionnaire');
  Route::get('/AfterQuestionnaire','AfterQuestionnaireController@index');
});
//問題のレベルを選択するページ
Route::group(['middleware' => 'auth'],function(){
  Route::get('/select/{ps}','HomeworkController@select')->name('select');
  Route::get('/question/{ps}/{id}','HomeworkController@question')->name('question');
  Route::get('answer/{ps}/{id}/{ans}','HomeworkController@answer')->name('answer');
  Route::post('store','HomeworkController@store')->name('store');

});



Route::group(['middleware' => 'auth'],function(){

});

//問題を追加する
Route::group(['prefix'=>'QuestionAdd','middleware'=> 'auth'],function(){
  Route::get('index','QuestionAddController@index')->name('QuestionAdd.index');
  Route::get('create','QuestionAddController@create')->name('QuestionAdd.create');
  Route::post('store','QuestionAddController@store')->name('QuestionAdd.store');
  Route::get('show','QuestionAddController@show')->name('QuestionAdd.show');
  Route::get('edit','QuestionAddController@edit')->name('QuestionAdd.edit');
  Route::delete('destroy','QuestionAddController@destroy')->name('QuestionAdd.destroy');
});

Route::post('/insertRanking', 'Web\RankingController@insertRanking');
Route::get('/chart','PlaceController@index');

Route::get('/home', 'HomeController@index')->name('home');
