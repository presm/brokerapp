<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('policies', 'App\Http\Controllers\PoliciesController@index');
Route::get('policies/{policies}', 'App\Http\Controllers\PoliciesController@show');
Route::post('policies', 'App\Http\Controllers\PoliciesController@store');
Route::put('policies/{policies}', 'App\Http\Controllers\PoliciesController@update');
Route::delete('policies/{policies}', 'App\Http\Controllers\PoliciesController@delete');

Route::get('insurers', 'App\Http\Controllers\InsurerController@index');
Route::get('insurers/{insurer}', 'App\Http\Controllers\InsurerController@show');
Route::post('insurers', 'App\Http\Controllers\InsurerController@store');
Route::put('insurers/{insurer}', 'App\Http\Controllers\InsurerController@update');
Route::delete('insurers/{insurer}', 'App\Http\Controllers\InsurerController@delete');

Route::get('customers', 'App\Http\Controllers\CustomersController@index');
Route::get('customers/{customer}', 'App\Http\Controllers\CustomersController@show');
Route::post('customers', 'App\Http\Controllers\CustomersController@store');
Route::put('customers/{customer}', 'App\Http\Controllers\CustomersController@update');
Route::delete('customers/{customer}', 'App\Http\Controllers\CustomersController@delete');

Route::get('clients', 'App\Http\Controllers\ClientController@index');
Route::get('clients/{client}', 'App\Http\Controllers\ClientController@show');
Route::post('clients', 'App\Http\Controllers\ClientController@store');
Route::put('clients/{client}', 'App\Http\Controllers\ClientController@update');
Route::delete('clients/{client}', 'App\Http\Controllers\ClientController@delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
