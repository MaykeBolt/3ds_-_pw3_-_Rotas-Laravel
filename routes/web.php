<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('screens.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/aboutus', 'App\Http\Controllers\AboutUsController@mainAboutUs');
Route::get('/contact', 'App\Http\Controllers\ContactController@mainContact');
Route::get('/news', 'App\Http\Controllers\NewsController@mainNews');
Route::get('/home', 'App\Http\Controllers\MainPageController@main')->name('screens.home');
Route::get('/404', 'App\Http\Controllers\FourOFourController@notfound')->name('screens.404');
Route::get('/test', function (){return 'amogus';});

Route::fallback( function (){return redirect()->route('screens.404');});

require __DIR__.'/auth.php';
