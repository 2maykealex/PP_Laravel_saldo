<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin' ], function(){
    $this->  get('balance', 'BalanceController@index')->name('admin.balance');
    $this->  get('/', 'AdminController@index')->name('admin');
});

$this->  get('/', 'SiteController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
