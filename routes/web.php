<?php

use Illuminate\Support\Facades\Route;

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
    $categories = \App\Category::all();
    $locations = \App\Location::all();
    $experiences = \App\Experience::all();
    $careers = \App\Career::all();
    return view('careers',compact('careers','categories','locations','experiences'));
});

Route::post('/careers','IndexController@careers')->name('careers.fetch');
Route::post('/applicants','IndexController@apply')->name('applicants.store');
Route::get('/career/{id}','IndexController@single')->name('career.single');

/*
|--------------------------------------------------------------------------
| CRUD Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin','namespace' => 'Backend'],function (){
    Route::resource('categories','CategoriesController');
    Route::resource('experiences','ExperiencesController');
    Route::resource('locations','LocationsController');
    Route::resource('careers','CareersController');

    Route::get('/index', 'AdminsController@index')->name('admin.home');
    Route::get('/applicants', 'AdminsController@applicants')->name('applicants.index');
    Route::delete('/applicants/{id}', 'AdminsController@destroy')->name('applicants.destroy');

    Route::post('logout', 'AdminsController@logout')->name('admin.logout');
});

/*
|--------------------------------------------------------------------------
| Admin Login Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'login'],function () {
    Route::get('admin', 'Backend\AdminsController@get')->name('admin.index');
    Route::post('admin', 'Backend\AdminsController@post')->name('admin.login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
