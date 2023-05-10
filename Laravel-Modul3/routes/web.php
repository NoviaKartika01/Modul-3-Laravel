<?php

//untuk import Route Controller
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//untuk route welcome
Route::get('/', function () {
    return view('welcome');
});

//untuk web cloning pertemuan 1
Route::get('/cloning', function() {
    return view('cloning');
});

//untuk membuat sebuah route (prakti laravel Routing) 4
Route::get('/routing', function() {
    return view('routing');
});

//untuk basic routing (no view, no controller) 4.1
Route::get('/basic_routing', function() {
    return 'Hello World';
});

//untuk view route 4.2
Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'Novia']);

//untuk Controller Route 4.3
Route::get('/controller_route', [RouteController::class, 'index']);

//untuk redirect route 4.4
Route::redirect('/', '/routing');

//untuk route parameter (required parameter) 4.5
Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

//untuk route parameter (optional parameter) 4.6
Route::get('username/{name?}', function($name = 'Novia') {
    return 'Username: '.$name;
});

//untuk route wuth regular expression constraints 4.7
Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');


//untuk named route 4.8
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

// untuk route priority 4.9
// Route::get('/route_priority/{rpId}', function($rpId) {
//    return "This is Route One";
// });
Route::get('/route_priority/user', function() {
    return "This is Route 1";
});
Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

//untuk fallback routes 4.10
Route::fallback(function() {
    return 'Ini adalah Fallback Route';
});

//untuk route group (route prefixes & route name prefixes) 4.11
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
