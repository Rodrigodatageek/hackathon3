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

Route::get('/owners/results', 'AnimalController@search');


Route::get('/owner', 'OwnerController@redirect');

Route::get('/animals/{id}/edit', 'AnimalController@edit');
Route::put('/animals/{id}', 'AnimalController$update');
Route::delete('animals/{id}/delete', 'AnimalController@delete');