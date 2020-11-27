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
// */
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/hello',function () {
// 	return 'Hello World';
// });

//   PRAKTIKUM 1 ROUTING WEB FRAMEWORK LARAVEL

// Route::get('/home',function () {
// 	return 'Selamat Datang'; 					// NO 1
// });
// Route::get('/about',function () {
// 	return 'NAMA : SIMON RAIS SIHOMBING <br> NIM : 1931710183'; 		
// });

// Route::get('/articles/{id}',function ($id) {
// 	return 'Halaman artikel dengan id'.$id; 	// NO 2
// });


// PRAKTIKUM 2 CONTROLLER WEB FRAMEWORK LARAVEL 

// Route View Utama
// Route::get('/home', 'HomeController@home');

// Route::get('/hello', 'HelloController@hello');

// Route Template Kuis
// Route::get('/homeboot','HomeController@homebootstrap');
// Route::get('/blogboot/{id}','ArticleController@articles');
// Route::get('/aboutMe', 'AboutMeController@aboutMe');
// Route::get('/contact', 'ContactController@contact');
// Route::get('/about', 'AboutController@about');
Auth::routes();

// Route add UTS
// view
Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'ArticleController@all')->name('dashboard');
Route::get('/article/{id}','ArticleController@articles');
Route::get('/contact', 'ContactController@contact');
Route::get('/about', 'AboutController@about');
Route::get('/manage', 'ManageController@index')->name ('manage');
// Route::get('/articles/store','ManageController@store');

// process
Route::get ('/articles/add','ManageController@add');
Route::post ('/articles/create','ManageController@create');
Route::get('/articles/edit/{id}','ManageController@edit');
Route::post('/articles/update/{id}','ManageController@update');
Route::get('/articles/delete/{id}','ManageController@delete');
Route::get('/articles/cetak_pdf','ManageController@cetak_pdf');

// User 
// Route::get('/manageuser','UserController@index');
// Route::get('/manageuser/addUser/{id}','UserController@addUser');
// Route::post('/manageuser/create','UserController@create');
// Route::get('/manageuser/edit{id}','UserController@edit');
// Route::post('/manageuser/update{id}','UserController@update');
// Route::get('/manageuser/delete{id}','UserController@delete');
