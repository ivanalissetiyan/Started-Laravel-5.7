<?php

Route::get('/', 'homeController@index');

Route::get('about', 'pageController@about');
Route::get('contact', 'pageController@contact');