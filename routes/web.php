<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "This is the about page";
})->name('about');

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
})->name('user.show');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', function () {
        return "Admin Dashboard";
    })->name('dashboard');

    Route::get('/users', function () {
        return "Admin Users List";
    })->name('users');
});


// fallback route
// Route::fallback(function () {
//     return response()->view('errors.404', [], 404);
// });

// Route::fallback(function () {
//     return "Hahahahh";
// });
