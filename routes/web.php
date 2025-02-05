<?php

use App\Http\Controllers\OwnerController;
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
    return view('welcome');
});

Route::get('/animals/search', 'AnimalController@search');
Route::get('/animals/index', 'AnimalController@listAnimals');
Route::get('/animals/detail/{id}', 'AnimalController@detail');

Route::get('/owners/results', 'AnimalController@search');
Route::get('/owners/detail/{id}', 'OwnerController@detail');


Route::get('/owner', 'OwnerController@redirect');

