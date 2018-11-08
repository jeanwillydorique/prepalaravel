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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/addseries', 'View@addSeries');
Route::get('/showseries', 'View@showSeries');
Route::get('/crudacteur', 'View@showActors');
Route::get('/crudgenre', 'View@showGenres');
Route::get('/updateserie', 'View@updateSeries');
Route::get('/addactor', 'View@addActor');
Route::get('/addgenre', 'View@addGenre');
Route::post('/updateserie1', 'View@showSeries1');
Route::post('/updateActor', 'View@showActorUpdate');
Route::post('/updateGenre', 'View@showGenreUpdate');


Route::post('/insertserie', 'Serie@insertOne');
Route::post('/updateserie', 'Serie@updateOne');
Route::post('/deleteserie', 'Serie@deleteOne');

Route::post('/insertActor', 'Actor@insertOne');
Route::post('/updateActor1', 'Actor@updateOne');
Route::post('/deleteActor', 'Actor@deleteOne');

Route::post('/insertGenre', 'Genre@insertOne');
Route::post('/updateGenre1', 'Genre@updateOne');
Route::post('/deleteGenre', 'Genre@deleteOne');



/* Route::get('/', function () {
    return view('child');
}); */

