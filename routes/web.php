<?php


Route::get('/', function () {
    return View('welcome');
});

Route::get('about', function () {
    return View('about');
});

Route::get('contact', function () {
    return View('contact');
});

Route::get('other', function () {
    return View('other');
});


