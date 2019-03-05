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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// order grilled cheese
Route::Post('/ordergrilledcheese/{price}', [
    'uses' => 'OrderController@ordergrilledcheese',
    'as' => 'ordergrilledcheese',
]);

// order fruity crepe
Route::Post('/orderfruitycrepe/{price}', [
    'uses' => 'OrderController@orderfruitycrepe',
    'as' => 'orderfruitycrepe',
]);

// order cheesy siomai
Route::Post('/ordercheesysiomai/{price}', [
    'uses' => 'OrderController@ordercheesysiomai',
    'as' => 'ordercheesysiomai',
]);


// order fried_oreos
Route::Post('/orderfried_oreos/{price}', [
    'uses' => 'OrderController@orderfried_oreos',
    'as' => 'orderfried_oreos',
]);


// order shake
Route::Post('/ordershake', [
    'uses' => 'OrderController@ordershake',
    'as' => 'ordershake',
]);


// order done
Route::get('/orderdone/{token}', [
    'uses' => 'OrderController@orderdone',
    'as' => 'orderdone',
]);

// order cancelled
Route::get('/ordercancelled/{token}', [
    'uses' => 'OrderController@ordercancelled',
    'as' => 'ordercancelled',
]);


// logoutcashier 
Route::get('/logoutcashier', [
    'uses' => 'OrderController@logoutcashier',
    'as' => 'logoutcashier',
]);

// cashierstats 
Route::get('/cashierstats', [
    'uses' => 'OrderController@cashierstats',
    'as' => 'cashierstats',
]);

// cashierstats 
Route::get('/overallstats', [
    'uses' => 'OrderController@overallstats',
    'as' => 'overallstats',
]);




// order qeue
Route::get('/orderqeue', [
    'uses' => 'OrderController@orderqeue',
    'as' => 'orderqeue',
]);





// order success
Route::get('/ordersuccess/{token}', [
    'uses' => 'OrderController@reviewday',
    'as' => 'ordersuccess',
]);
