<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [
    'as'=>'product',
    'uses'=>'ProductController@index'
]);

