<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleControllerAction;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return "This is the about page";
})->name('about');

Route::get('/single-action', SingleControllerAction::class);

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
})->name('user.show');

Route::get('/contact', function () {
    $title = "Contact Us";
    $books = ['Book 1', 'Book 2', 'Book 3'];
    return view('Contact', ['title' => $title, 'books' => $books]);
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

Route::resource('/blog', BlogController::class);


// fallback route
// Route::fallback(function () {
//     return response()->view('errors.404', [], 404);
// });

// Route::fallback(function () {
//     return "Hahahahh";
// });
