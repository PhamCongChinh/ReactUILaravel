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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('{any}', function () {
    return view('index'); // or wherever your React app is bootstrapped.
})->where('any', '.*');*/
Route::get('/', function () {
    return view('index');
});
Route::get('menu', 'MenuController@index');

Route::get('category', 'CategoryController@index');

Route::get('{slug}', 'APIController@categoriesByMenuSlug');