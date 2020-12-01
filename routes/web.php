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


/* Authentification routes */
Auth::routes();

/* Accueil */
Route::get('/', 'HomeController@index')->name('accueil');	

/* Signin with Google API */
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

//Route::get('/setting', 'HomeController@setting')->name('setting');


/** Categories Routes **/

Route::get('/listCategorie', 'HomeController@listCtg');

Route::get('/addCategorie', 'HomeController@addCategorie');

Route::post('/addCategorie', 'HomeController@addCategorie');

Route::get('/updateCategorie/{id}', 'HomeController@updateCategorie');

Route::post('/updateCategorie/{id}', 'HomeController@updateCategorie');

Route::get('/deleteCategorie/{id}', 'HomeController@deleteCategorie');


/** Tache Routes **/   

Route::get('/listTache', 'HomeController@listTache');

Route::get('/addTache', 'HomeController@addTache');

Route::post('/addTache', 'HomeController@addTache');

Route::get('/tache_update/{id}', 'HomeController@tache_update');

Route::post('/tache_update/{id}', 'HomeController@tache_update');

Route::get('/tache_delete/{id}', 'HomeController@tache_delete');

Route::get('/listeCtgTache/{id}', 'HomeController@listeCtgTache');