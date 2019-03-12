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


// Route::get('/home', function () {
//     return view('layout');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/members', function () {
    return view('members');
});
Route::get('/addmember', function () {
    return view('addmember');
});
Route::get('/haddassah', function () {
    return view('haddassah');
});
Route::get('/settings', function () {
    return view('settings');
});

// Route::resource();
