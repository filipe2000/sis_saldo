<?php

$this->get('admin','AdminController@index')->name('admin');
$this->get('/','SiteController@index')->name('nome');

Auth::routes();

