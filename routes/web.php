<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return redirect('/');
    }

    // return view('welcome');
});





Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {

    Route::get('/create_customer', 'InsuranceController@create_customer');
    Route::post('/insert_customer', 'InsuranceController@insert_customer');
    Route::get('/create_policy', 'InsuranceController@create_policy');
    Route::post('/policy_insert', 'InsuranceController@policy_insert');
    Route::get('/home', 'InsuranceController@home');
    Route::get('/listofcust', 'InsuranceController@listofcust');
    Route::get('/allpolicy', [
        'as' => 'admin.allpolicy.index',
        'uses' => 'InsuranceController@allpolicy',
    ]);
    Route::get('/logout', 'InsuranceController@logout');
    Route::get('/exp', 'InsuranceController@exp');
    Route::post('/policy_delete', 'InsuranceController@policy_delete');
    Route::post('/customer_delete', 'InsuranceController@customer_delete');
    Route::get('/allpolicy_edit/{id}', 'InsuranceController@allpolicy_edit');
    Route::post('/allpolicy_update', 'InsuranceController@allpolicy_update');
    Route::get('/allpolicy_home_edit/{id}', 'InsuranceController@allpolicy_home_edit');
    Route::post('/policy_home_update', 'InsuranceController@policy_home_update');
    Route::get('/search', 'InsuranceController@search');
    Route::get('/customer_edit/{id}', 'InsuranceController@customer_edit');
    Route::post('/customer_update', 'InsuranceController@customer_update');
});


Route::group(['namespace' => 'App\Http\Controllers'], function () {


    Route::get('/', 'InsuranceController@user_login')->name('login');
    Route::post('/', 'InsuranceController@do_login');
});
