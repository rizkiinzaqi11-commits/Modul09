<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::redirect('/', '/routing');
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

Route::get('/routing', function () {
    return view('routing');
});

Route::get('/basic_routing', function () {
    return 'Hello World';
});

Route::view('/view_route', 'view_route', [
    'name' => 'Rizqi Inzaqi'
]);

Route::get('/controller_route', [RouteController::class, 'index'
]);

Route::get('username/{name?}', function($name = null) {
    return 'Username: '.$name;
});

Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

Route::get('/route_priority/{rpId}', function($rpId) {
  return "This is Route One";
});

Route::get('/route_priority/user', function() {
    return "This is Route 1";
});

Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');

    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');

    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});

Route::view('/beranda', 'beranda')->name('beranda');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/portofolio', 'portofolio')->name('portofolio');
Route::view('/kontak', 'kontak')->name('kontak');

Route::fallback(function() {
    return 'This is Fallback Route';
});
