<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin' ], function(){
    $this->  get('admin', 'AdminController@index')->name('admin');
});

$this->  get('/', 'SiteController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
