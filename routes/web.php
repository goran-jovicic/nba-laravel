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

Auth::routes(['verify' => true]);

Route::get('/teams', ['as' => 'team-list', 'uses' => 'TeamsController@index'])->name('teams');

Route::get('/teams/{id}', ['as' => 'team-details', 'uses' => 'TeamsController@show']);

Route::post('/teams/{teamId}/comments', ['as' => 'comments-post', 'uses' => 'CommentsController@store']);

Route::get('/players/{id}', ['as' => 'player-details', 'uses' => 'PlayersController@show'])->name('players');

Route::get('/register', ['as' => 'register-user', 'uses' => 'RegisterController@create']);

Route::post('/register', ['as' => 'store-user', 'uses' => 'RegisterController@store']);

Route::get('/login', ['as' => 'login-user', 'uses' => 'LoginController@create']);

Route::post('/login', ['as' => 'post-user', 'uses' => 'LoginController@store']);

Route::get('/logout', ['as' => 'logout-user', 'uses' => 'LoginController@destroy']);

Route::get('/news', 'NewsController@index');

Route::get('/news/{id}', 'NewsController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
