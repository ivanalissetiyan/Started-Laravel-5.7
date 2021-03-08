<?php


Route::get('/', function () {
    return 'My Name Is Ivan';
});

Route::get('about', function () {
    return View('about');
});

Route::get('contact', function () {
    return View('contact');
});

Route::get('posts', function () {
    return View('posts.author.index');
});
