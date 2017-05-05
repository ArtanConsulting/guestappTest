<?php

use App\Order;



Route::group(['middleware'=>['web']], function(){
    Route::auth();
//User experience

    Route::get('/', function () {
        return view('form');
    });

    Route::get('/login', function(){
        return view('auth.login');
    });

    Route::get('/form', 'DaysController@form');


    Route::get('/days', 'DaysController@index')->middleware('auth');

    Route::get('/days/{day}', [
        'uses'=>'DaysController@show',
        'as'=>'days'
    ])->middleware('auth');

    Route::get('/service', 'DaysController@service')->middleware('isAdmin');

    Route::post('days/{days}/orders', 'OrderController@storeOrder')->middleware('auth');


// Restaurant experience

    Route::get('/todos', 'OrderController@weekOrder')->middleware('auth');
    
    Route::get('/orders/{day}', [
        'uses'=>'OrderController@showOrders',
        'as'=>'orders'
    ])->middleware('isAdmin');


//Edit & Update Menü
    Route::get('/menu', 'HomeController@menu')->middleware('auth');

    Route::get('/days/{day}/edit', [
        'uses'=>'HomeController@editMenu',
        'as'=>'days.edit'
    ])->middleware('isAdmin');

    Route::patch('/days/{day}', 'HomeController@update');
// Delete orders
    Route::delete('/delete/{id}', [
        'as'=>'order.delete',
        'uses'=>'HomeController@destroyOrder'
     ]);
    
});






