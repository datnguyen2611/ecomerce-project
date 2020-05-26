<?php

//Route::view('/', 'landing-page');
Route::get('/' ,'LandingPageController@index')->name('landing-page');
Route::get('/shop' ,'ShopController@index')->name('shop');
Route::get('/shop/{product}' ,'ShopController@show')->name('shop.show');
Route::get('/cart' ,'CartController@index')->name('cart.index');
Route::post('/cart' ,'CartController@store')->name('cart.store');
Route::delete('/cart/{product}' ,'CartController@destroy')->name('cart.destroy');
Route::get('/empty',function (){
    Cart::destroy();
});

