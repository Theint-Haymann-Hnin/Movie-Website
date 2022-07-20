<?php

use Illuminate\Support\Facades\Route;
use App\Movie;


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

Route::redirect('/','UI/landing');

// SEARCHING 
Route::get('searching','PageController@searching');

Route::get('search_movies','PageController@search');


// UI

Route::prefix('UI')->group(function(){
    
    Route::get('/landing','PageController@landing');
    
    Route::get('/detail/{id}','PageController@detail');
    
    Route::get('/search_by_category/{catId}','PageController@searchByCategory');

   
    
    // Rating
    Route::post('/rating','PageController@rating');
    
});
Auth::routes();

// Route::prefix('Admin')->group(function(){
    
    Route::group(['prefix'=>'Admin','middleware'=>'auth'],function (){
        Route::get('/','AdminPageController@landing');
        Route::get('/navs','NavController@index');
        Route::get('/latestkoreanseries','NavController@latestkoreanseries');
        Route::get('/navmovie','NavController@navmovie');
        Route::get('/latestmovie','NavController@latestmovie');
        Route::get('/latesthorrormovie','NavController@latesthorrormovie');
        Route::get('/navcomingsoon','NavController@navcomingsoon');
        Route::get('/latestcomedymovie','NavController@latestcomedymovie');
        //
        Route::get('/movie/index','MovieController@index');
        Route::get('/movie/create','MovieController@create');
        Route::post('/movie/store','MovieController@store');
        Route::get('/movie/edit/{id}','MovieController@edit');
        Route::post('/movie/update/{id}','MovieController@update');
        Route::get('/movie/delete/{id}','MovieController@delete');
        Route::resource('/companies','CompanyController');
        Route::resource('/actors','ActorController');
        Route::resource('/actresses','ActressController');
        Route::resource('/writers','WriterController');
        Route::resource('/directors','DirectorController');
        Route::resource('/categories','CategoryController');
        Route::resource('/genres','GenreController');
        
        //  multi-auth
        
        Route::get('/normal_users', 'HomeController@index')->name('home');
        Route::get('/users','UserController@index');
        Route::get('/admins','AdminController@index');
        Route::get('/roles','RoleController@index');
        
        
        
        
    });
    
    
    
    