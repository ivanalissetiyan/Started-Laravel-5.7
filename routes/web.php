<?php


Route::get('/', function () {
    $tasks = ["Kuliah", "Kerja", "Freelance", "Pengajar"];
    
    return View('welcome', [
        'tasks' => $tasks
    ]);
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


