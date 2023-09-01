<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
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

//frontend
Route::get('/', [HomeController::class, 'index']);

Route::get('/service', ServiceController::class);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', ContactController::class)->name('page.contact');

Route::get('/welcome', function () {
    return view('/welcome')->name('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//services
//Route::get('services/index', [ServiceController::class, 'index'])->name('services.index')->middleware('auth');
//Route::get('services/create', [ServiceController::class, 'create'])->name('services.create')->middleware('auth');
//Route::post('services/store', [ServiceController::class, 'store'])->name('services.store')->middleware('auth');
//Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit')->middleware('auth');
//Route::put('services/{update}', [ServiceController::class, 'update'])->name('services.update')->middleware('auth');
//Route::delete('services/{destroy}', [ServiceController::class, 'destroy'])->name('services.destroy')->middleware('auth');

//backend
Route::resource(name: 'services',controller: ServiceController::class)->middleware('auth');

//auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
