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
    return view('welcome');
});

Route::get('/contract/{customer_id}/{contract_id?}', [
    'as' => 'contract.index',
    'uses' => 'ContractController@index'
])->defaults('contract_id', 'LOREN');

