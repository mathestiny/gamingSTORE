<?php


use Illuminate\Support\Facades\Route;



/* routage pour les produits */



Route::get('/' , 'App\Http\Controllers\PagesController@index');
Route::get('/about' , 'App\Http\Controllers\PagesController@about');
Route::get('/profil' , 'App\Http\Controllers\PagesController@profil');
Route::get('/products' , 'App\Http\Controllers\PagesController@products');
Route::resource('/blogs', BlogController::class);


Route::post('userUpdate', 'HomeController@userUpdate');


Auth::routes();
Route::get('/game' , 'App\Http\Controllers\PagesController@game');
Route::get('/games' , 'App\Http\Controllers\PagesController@games');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::get('/monprofile','App\Http\Frontend\UserController@monprofile');
