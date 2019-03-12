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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', function () {
//     return view('layout');
// });

Route::get('/', 'DashboardController@home');

/**
 *
 *  How to interact with a project(eg. Members Record.)
 *
 *  GET /members            (index or home)
 *  GET /members/create     (create method)
 *  GET /members/id         (show method)
 *  POST /members           (store method)
 *  GET /members/id/edit    (Edit method)
 *  PATCH /members/id       (update)
 *  DELETE /members/id      (delete)
 *
 */


//  Route::get('\members', 'MembersController@index');
//  Route::get('\members\{member}', 'MembersController@show');
//  Route::get('\members\create', 'MembersController@create');
//  Route::post('\members', 'MembersController@store');
//  Route::get('\members\{members}\edit', 'MembersController@edit');
//  Route::patch('\members\{members}', 'MembersController@update');
//  Route::delete('\members\{members}', 'MembersController@destroy');


Route::resource('/members', 'MembersController'); //Same as above.
Route::post('/members/del/{{member}}', 'MembersController@del'); //to navigate the achor tag delete option shortcomings.


// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::post('/members', function () {
//     return view('members.members');
// });
// Route::get('/addmember', function () {
//     return view('members.addmember');
// });
// Route::get('/haddassah', function () {
//     return view('haddassah');
// });
// Route::get('/settings', function () {
//     return view('settings');
// });

// Route::resource();
