<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Dashboard\FavoriteController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Home;
use App\Http\Controllers\Home\QuizController;
use App\Http\Controllers\Home\SiteController;
use App\Http\Controllers\Home\StudentController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/dashboard/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/pusher/auth', function () {
    return Auth::user();
});

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/courses', [SiteController::class, 'courses'])->name('courses');
Route::get('/courses/{id}', [SiteController::class, 'course'])->name('courses.show');
Route::get('/lessons/{id}', [SiteController::class, 'lesson'])->name('lessons.show');
Route::get('/lessons/{id}/quiz', [SiteController::class, 'quiz'])->name('lessons.quiz');

Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact-us', [SiteController::class, 'contact'])->name('contact');
Route::post('/postContact', [SiteController::class, 'postContact'])->name('postContact');


Route::get('/blogs', [SiteController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{id}', [SiteController::class, 'blog'])->name('blogs.show');

// Ensure that the user is authenticated for these routes
Route::middleware(['auth'])->group(function () {

    Route::post('favorites', [StudentController::class, 'favorite'])->name('favorites.store');
    Route::delete('favorites', [StudentController::class, 'destroyfavorite'])->name('favorites.destroy');
    Route::post('comments', [StudentController::class, 'comment'])->name('comments.store');
  });

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/updateInfo', [ProfileController::class, 'updateInfo'])->name('profile.updateInfo');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::delete('favorites/{id}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');

    // suggestion
});
Route::middleware(['role:admin'])->prefix('dashboard')->name('dashboard.')->group(function () {
    // Routes accessible only to admins


    Route::get('/statistics', [Dashboard\HomeController::class, 'statistics'])->name('statistics.index');

    Route::resource('users', Dashboard\UserController::class);
    Route::get('/contact', [Dashboard\HomeController::class, 'contact'])->name('contact');
});
// teacher
Route::middleware(['role:admin||moderator|teacher'])->prefix('dashboard')->name('dashboard.')->group(function () {
    // Routes accessible to admins and coach

    Route::resource('properties', Dashboard\PropertyController::class);
    Route::resource('properties/{property}/image', Dashboard\PropertyImageController::class)->except(['show', 'edit', 'update']);

    Route::resource('comments', Dashboard\CommentController::class);



    Route::get('/imageGallery/browser', [Dashboard\ImageGalleryController::class, 'browser'])->name('imageGallery.browser');
    Route::post('/imageGallery/uploader', [Dashboard\ImageGalleryController::class, 'uploader'])->name('imageGallery.uploader');
});

Route::middleware(['role:admin||moderator'])->prefix('dashboard')->name('dashboard.')->group(function () {
    // Routes accessible to admins and coach

    Route::resource('categories', Dashboard\CategoryController::class);


    Route::get('/imageGallery/browser', [Dashboard\ImageGalleryController::class, 'browser'])->name('imageGallery.browser');
    Route::post('/imageGallery/uploader', [Dashboard\ImageGalleryController::class, 'uploader'])->name('imageGallery.uploader');
});

require __DIR__ . '/auth.php';
